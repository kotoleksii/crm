<?php

require_once(ROOT . '/models/WorkerModel.php');
require_once(ROOT . '/components/CookiesManager.php');

class WorkerController
{
    public function actionIndex()
    {
        $currentUser = CookiesManager::$authUser;
        $title = 'Workers list';

        $wm = new WorkerModel();
        $workers = $wm->get();

        $contentViewPath = ROOT . '/views/worker/ListView.php';

        require_once(ROOT . '/views/layouts/MainView.php');


        //TODO
        if(!isset($_POST['frm_workers'])) {
            require_once($contentViewPath);
        } else{
            
            $data = [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'phone' => $_POST['phone'],
                'status' => $_POST['status'],
                'salary' => $_POST['salary'],
            ];
            $wm->add($data);
        }
        
    }
}