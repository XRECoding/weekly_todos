<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryModel;

class Categories extends BaseController {
    public function __construct() {
        $this->CategoryModel = new CategoryModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function index() {
        $data['title'] = 'Kategorien';

        echo view('templates/header', $data);
        echo view('modals/Categories');
        echo view('pages/Categories');
        echo view('scripts/Categories');
        echo view('templates/Footer');
    }

    public function selectCategory() {
        return json_encode($this->CategoryModel->selectCategory());
    }

    public function updateCategory() {
        $this->CategoryModel->updateCategory();
    }
}