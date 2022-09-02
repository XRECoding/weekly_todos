<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    public function getUsers() {
        return $this->db->
        table('users')->
        get()->getRowArray();
    }

}