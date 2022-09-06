<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Registration extends BaseController {
    public function __construct() {
        $this->UserModel = new UserModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function index() {
        helper("form");
        $data['title'] = 'Registration';

        if (isset($_POST['save'])) {
            if ($this->validation->run($_POST, 'registration')) {
                $this->UserModel->insertUser();
                echo "<h1>You did it!</h1>"; echo die();
                #$this->session->set('loggedin', TRUE);
                # return redirect()->to(base_url().'/Index');
                
            } else {
                $data['error'] = $this->validation->getErrors();
            }
        } else if (isset($_POST['cancel'])) {
            return redirect()->to(base_url().'/Login');
        }

        echo view('templates/header', $data);
        echo view('pages/Registration');
        echo view('templates/Footer');
    }
}