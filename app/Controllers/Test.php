<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Test extends BaseController {

    public function index() {
        $data['title'] = 'Registration';

        echo view('templates/header', $data);
        echo view('pages/Test');
        echo view('templates/Footer');
    }
}