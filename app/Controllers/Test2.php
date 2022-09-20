<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryModel;

class Test2 extends BaseController {
    public function __construct() {
        $this->CategoryModel = new CategoryModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function index() {
        $data['title'] = 'Kategorien';
        $data['entries'] = $this->CategoryModel->selectCategories();
        $data['order'] = $this->CategoryModel->selectOrder();


        echo view('templates/header', $data);
        echo view('pages/Test2');
        echo view('scripts/Drag_and_Drop');
        echo view('modals/Categories');
        //echo view('scripts/Categories');
        echo view('templates/Footer');
    }



    public function selectCategory() {
        return json_encode($this->CategoryModel->selectCategory());
    }

    public function updateCategory() {
        $this->CategoryModel->updateCategory();
    }

    public function insertCategory() {
        return json_encode($this->CategoryModel->insertCategory());
    }

    public function deleteCategory() {
        $this->CategoryModel->deleteCategory();
    }

    public function updateOrder() {
        $this->CategoryModel->updateOrder();
    }    
}