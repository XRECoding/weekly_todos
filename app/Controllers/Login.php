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
        $data['title'] = 'Login';

        if (isset($_POST['create'])) {
            return redirect()->to(base_url().'/Registration');
        }

        echo view('templates/header', $data);
        echo view('pages/Login');
        echo view('templates/Footer');
    }
}