<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class asd extends BaseController {
    public function __construct() {
        $this->UserModel = new UserModel();
    }

    public function index() {
        # Check if successfully connected to database
        echo var_dump($this->UserModel->getUsers());
    }
}
