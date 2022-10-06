<?php namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\StatisticsModel;
use CodeIgniter\Controller;
include (APPPATH . 'Libraries/lib/inc/chartphp_dist.php');

class Statistics extends BaseController {

    public function __construct() {
        $this->StatisticsModel = new StatisticsModel();
        $this->session = \Config\Services::session();
    }

    public function index() {
        $data['title'] = 'Statistics';

        $data['today'] = date('d.m.Y');
        //$data['p'] = new \chartphp();

        // creating array with all categories of the user
        $data['categories'] = array();
        foreach ($this->StatisticsModel->getCategories() as $rowArray){
            foreach ($rowArray as $category) {
                array_push($data['categories'], $category);
            }
        }

        // adding all the time spent
        $data['endTimes'] = array();
        foreach ($data['categories'] as $category){
            array_push($data['endTimes'], $this->StatisticsModel->getEntries($category));
        }

        $startingTimes = array();
        foreach ($data['categories'] as $category){
            array_push($startingTimes, $this->StatisticsModel->getStartingTimes($category));
        }



        // creating data points for the bar chart
        $data['dataPoints'] = array(
            // TODO
            array("y" => 7,"label" => "Uni" ),
            array("y" => 12,"label" => "Arbeit" ),
            array("y" => 28,"label" => "Freizeit" )
        );

        echo view('templates/header', $data);
        //echo view('scripts/statistics');
        echo view('pages/statistics', $data);
        echo view('templates/Footer');
    }
}