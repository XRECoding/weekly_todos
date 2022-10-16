<?php namespace App\Models;
use CodeIgniter\Model;

class StatisticsModel extends Model {

    public function getCategories() {
        $this->session = \Config\Services::session();

        return $this->db->
        table('entries')->
        select('designation')->
        where('userID', $this->session->get('userID'))->
        orderby('order', 'ASC')->
        distinct()->
        get()->getResultArray();
    }









    public function getTimeSpent($category, $date) {
        // TODO make prepared statements to avoid SQL Injection
        $this->session = \Config\Services::session();

        $user = $this->session->get('userID');

        $result = $this->db->query("
        SELECT sum(completed-started) as '$category'
        FROM entries
        WHERE designation = '$category' and userID = $user and date = '$date'");

        return $result->getRowArray();
    }
}