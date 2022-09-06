<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Registration extends BaseController {

    public function index() {
        $data['title'] = 'Registration';

        echo view('templates/header', $data);
        echo view('pages/test3');
        echo view('templates/Footer');
    }
}