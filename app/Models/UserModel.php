<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    public function selectUser() {
        return $this->db->
        table('users')->
        where('email', $_POST['email'])->
        get()->getRowArray();
    }

    public function insertUser() {
        $this->db->
        table('users')->
        insert(array(
            'email'     => $_POST['email'],
            'password'  => $_POST['password1']
        ));
    }

    public function updateUser() {

    }

    public function deleteUser() {
    
    }

}