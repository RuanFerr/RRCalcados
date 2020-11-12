<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of ApiCall
 *
 * @author ruan2
 */
class ApiCall extends \CodeIgniter\Controller {

    public function index() {
        return redirect()->to(site_url());
    }

}
