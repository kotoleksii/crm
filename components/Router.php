<?php

require_once(ROOT . '/components/CookiesManager.php');

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = include(ROOT . '/config/routes.php');
    }
    
    private function getUri(): string
    {
        $uri = $_SERVER['REQUEST_URI'];

        if(!empty($uri)) {
            $uri = strtok($uri, '?');
            return trim($uri, '/');            
        }
    }

    private function executeAction($segments)
    {
        $controllerName = ucfirst(array_shift($segments) . 'Controller');
        $actionName = 'action' . ucfirst(array_shift($segments));

        $parameters = $segments;

        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
    
        if(file_exists($controllerFile)) {  
            include_once($controllerFile);
            $controllerObj = new $controllerName;
            call_user_func_array([$controllerObj, $actionName], $parameters);
        }

        return;
    }

    public function run()
    {
        $uri = $this->getUri();

        $isLoggedIn = CookiesManager::check();

        if ($uri === '') {   
            header('Location:' . HOME_URL);
            return;
        }
   
        foreach($this->routes as $pattern => $path) {
            if (preg_match("~$pattern~", $uri)) {
                $internalRoute = preg_replace("~$pattern~", $path, $uri);
                $segments = explode('/', $internalRoute);
                
                $flagAccess = array_shift($segments);
                
                if ($flagAccess === 'pub' || ($flagAccess === 'priv' && $isLoggedIn)) {
                    $this->executeAction($segments);
                } else {
                    header('Location: /login');
                }

                return;
            }
        }

        require_once(ROOT . '/views/static/404View.php');

        return;
    }
}