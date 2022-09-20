<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryModel;

class test extends BaseController {

    public function index() {
        echo view('pages/test');
    }
}