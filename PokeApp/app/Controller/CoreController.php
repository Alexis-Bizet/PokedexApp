<?php

namespace App\Controller;

class CoreController
{
   
    protected function show($viewName, $viewData = [])
    {
        global $router;
        $viewData['currentPage'] = $viewName;
        $viewData['baseUri'] = $_SERVER['BASE_URI'];
        extract($viewData);
        require_once __DIR__ . '/../View/layout/header.tpl.php';
        require_once __DIR__ . '/../View/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../View/layout/footer.tpl.php';

    }
}