<?php

namespace DevSquad\Controllers;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('index');
    }

    public function error404()
    {
        echo '404';
    }
}