<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Registration extends BaseController {
    public function index() {
        $data['title'] = 'Registration';

        echo view('templates/header', $data);
        echo view('pages/Registration');
        echo view('templates/Footer');
    }
}




