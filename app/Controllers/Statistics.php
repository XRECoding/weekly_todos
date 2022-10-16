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
        //$data['today'] = $_SESSION['selectedDate'];

        // creating array with all categories of the user
        $data['categories'] = array();
        foreach ($this->StatisticsModel->getCategories() as $rowArray){
            foreach ($rowArray as $category) {
                array_push($data['categories'], $category);
            }
        }

        // get the time spent for each category
        $data['timeSpent'] = array();
        foreach ($data['categories'] as $category){
           array_push($data['timeSpent'], $this->StatisticsModel->getTimeSpent($category));
        }

        // creating data points for the bar chart
        $data['dataPoints'] = array();

        foreach ($data['timeSpent'] as $entry){
            foreach ($entry as $designation=>$timeSpent){
                array_push($data['dataPoints'], array("y" => $timeSpent, "label" => $designation));
            }
        }

        echo view('templates/header', $data);
        echo view('scripts/statistics');
        echo view('pages/statistics', $data);
        echo view('templates/Footer');
    }
}