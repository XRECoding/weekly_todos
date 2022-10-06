<?php namespace App\Models;
use CodeIgniter\Model;

class StatisticsModel extends Model {

    public function getCategories() {
        $this->session = \Config\Services::session();

        return $this->db->
        table('categories')->
        select('designation')->
        where('userID', $this->session->get('userID'))->
        orderby('order', 'ASC')->
        get()->getResultArray();
    }

    public function getEntries($category) {
        // TODO
        $this->session = \Config\Services::session();

        return $this->db->
        table('entries')->
        select('completed')->
        where('userID', $this->session->get('userID'))->
        where('designation', $category)->
        orderby('order', 'ASC')->
        get()->getResultArray();
    }

    public function getStartingTimes($category) {
        // TODO
        $this->session = \Config\Services::session();

        return $this->db->
        table('entries')->
        select('started')->
        where('userID', $this->session->get('userID'))->
        where('designation', $category)->
        orderby('order', 'ASC')->
        get()->getResultArray();
    }

}