<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController {
    public function __construct() {
        $this->UserModel = new UserModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function index() {
        helper("form");
        $data['title'] = 'Einstellungen';

        echo view('templates/header', $data);
        echo view('pages/Settings');
        echo view('templates/Footer');
    }
}