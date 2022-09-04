<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController {
    public function __construct() {
        $this->UserModel = new UserModel();
    }

    public function index() {
        $data['title'] = 'Login';

        echo view('templates/header', $data);
        echo view('pages/LoginTest');
        echo view('templates/footer');
    }
}
