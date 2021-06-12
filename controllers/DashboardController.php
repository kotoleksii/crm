<?php

class DashboardController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/dashboard/DashboardView.php');
        return;
    }
}