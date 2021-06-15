<?php

require_once(ROOT . '/models/WorkerModel.php');
require_once(ROOT . '/components/CookiesManager.php');

class WorkerController
{
    public function actionIndex()
    {
        $wm = new WorkerModel();
       
        if(isset($_POST['frm_add_worker'])) {  
            if(isset($_POST['btn_add'])) {
                $data = [
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'phone' => $_POST['phone'],
                    'status' => $_POST['status'] ==='on' ? true : false,
                    'salary' => $_POST['salary'],
                ];
                $wm->add($data);
    
            } 
            
            header('Location: /workers');
            
        } else {
            if(isset($_POST['frm_sorting'])) {
                $field = $_POST['field'];

                if (isset($_COOKIE['direction'])) {
                    if($_COOKIE['direction'] === '1') {
                        $direction = 0;
                        setcookie('direction', '0', time() + (3600 * 24 * 30), '/');
                    } else {
                        $direction = 1;
                        setcookie('direction', '1', time() + (3600 * 24 * 30), '/');
                    }
                } else {
                    $direction = 1;
                    setcookie('direction', '1', time() + (3600 * 24 * 30), '/');
                }

                $workers = $wm->getSortedList($field, $direction);
            } else {
                $workers = $wm->get();
            }


            $currentUser = CookiesManager::$authUser;
            $title = 'Workers list';  
    
            $contentViewPath = ROOT . '/views/worker/ListView.php';   
            require_once(ROOT . '/views/layouts/MainView.php'); 
        }
        
       
    }

    public function actionEdit($id)
    {
        dd($id);
    }

    public function actionDelete($id)
    {
        $wm = new WorkerModel();
        $wm->delete($id);
        header('Location: /workers');
    }
}