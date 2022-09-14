<?php namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model {

    public function selectCategory() {
        return $this->db->
        table('categories')->
        where('categoryID', $_POST['categoryID'])->
        get()->getRowArray();
    }

    public function selectCategories() {
        $this->session = \Config\Services::session();
        
        return $this->db->
        table('categories')->
        where('userID', $this->session->get('userID'))->
        get()->getResultArray();
    }

    public function updateCategory() {
        $this->db->
        table('categories')->
        where('categoryID', $_POST['categoryID'])->
        update(array(
            'designation' => $_POST['designation']
        ));
    }

    public function insertCategory() {
        $this->session = \Config\Services::session();

        $this->db->
        table('categories')->
        insert(array(
            'userID' => $this->session->get('userID'),
            'designation' => $_POST['designation']
        ));

        return $this->db->insertID();
    }

    public function deleteCategory() {
        $this->db->
        table('categories')->
        where('categoryID', $_POST['categoryID'])->
        delete();
    }
}