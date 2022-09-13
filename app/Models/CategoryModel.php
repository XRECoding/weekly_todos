<?php namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model {

    public function selectCategory() {
        return $this->db->
        table('categories')->
        where('categoryID', $_POST['categoryID'])->
        get()->getRowArray();
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

    }

    public function deleteCategory() {
    
    }

}