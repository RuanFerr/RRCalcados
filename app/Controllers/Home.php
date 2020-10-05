<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {

        echo view('marketplace/header');
        echo view('marketplace/main_menu');
        echo view('marketplace/footer');
    }

    //--------------------------------------------------------------------
}
