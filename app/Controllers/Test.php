<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Test extends BaseController {

    public function index() {
        $data['title'] = 'Registration';
        
        echo view('templates/header2', $data);
        echo view('pages/Test');
        echo view('scripts/Drag_and_Drop');
        echo view('templates/Footer');
    }
}