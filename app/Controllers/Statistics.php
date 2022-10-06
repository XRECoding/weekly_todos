<?php namespace App\Controllers;
use CodeIgniter\Controller;
include (APPPATH . 'Libraries/lib/inc/chartphp_dist.php');

class Statistics extends BaseController {

    public function index() {
        $data['title'] = 'Statistics';


        $data['today'] = date('d.m.Y');


        $data['p'] = new \chartphp();

        // set few params
        $data['p']->data = array(
            array(
                array("2010/12",48.25),
                array("2011/01",238.75),
                array("2011/02",95.50),
                array("2011/03",300.50),
                array("2011/04",286.80),
                array("2011/05",148.25),
                array("2011/06",128.75),
                array("2011/07",95.50)
            )
        );
        $data['p']->chart_type = "bar";
        $data['p']->title = "Bar Chart";
        $data['p']->xlabel = "Months";
        $data['p']->ylabel = "Purchase";
        $data['p']->show_xticks = true;
        $data['p']->show_yticks = true;
        $data['p']->show_point_label = true;

        // render chart and get html/js output
        $data['out'] = $data['p']->render('c1');




        echo view('templates/header', $data);
        echo view('pages/statistics', $data);
        echo view('templates/Footer');
    }
}