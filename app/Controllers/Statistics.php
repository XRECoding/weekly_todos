<?php namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\StatisticsModel;
use CodeIgniter\Controller;
use Cassandra\Date;
include (APPPATH . 'Libraries/lib/inc/chartphp_dist.php');

class Statistics extends BaseController {

    public function __construct() {
        $this->StatisticsModel = new StatisticsModel();
        $this->session = \Config\Services::session();
    }

    public function index() {
        $data['title'] = 'Statistics';

        //$data['today'] = date('d.m.Y');
        $data['statisticsHeader'] = $_SESSION['selectedDate'];

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
           array_push($data['timeSpent'], $this->StatisticsModel->getTimeSpent($category, $_SESSION['selectedDate']));
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
        echo view('pages/statistics/dayHeader', $data);
        echo view('pages/statistics/body', $data);
        echo view('templates/Footer');
    }

    /**
     * This function filters the different buttons in the header. Depending on the button it does the following:
     * 1. Redirects to the Settings page
     * 2. swaps between daily / weekly / monthly / yearly statistic
     * 3. modifies the selected date and shows the statistic for the new date
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function button_filter(){
        if (isset($_POST['settings'])) return redirect()->to(base_url() . '/index.php/settings');

        if (isset($_POST['dayStatistics'])) $this->showDay();

        if (isset($_POST['weekStatistics'])) $this->showWeek();

        if (isset($_POST['monthStatistics'])) $this->showMonth();

        if (isset($_POST['yearStatistics'])) $this->showYear();

        if (isset($_POST['dayPrev'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $DateTime -> modify('-1 Day');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showDay();
        }

        if (isset($_POST['dayNext'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $DateTime -> modify('+1 Day');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showDay();
        }

        if (isset($_POST['weekPrev'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $DateTime -> modify('-7 Days');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showWeek();
        }

        if (isset($_POST['weekNext'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $DateTime -> modify('+7 Days');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showWeek();
        }

        if (isset($_POST['monthPrev'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $day = $_SESSION['selectedDate']->format('j');
            $DateTime->modify('first day of -1 month');
            $DateTime->modify('+' . (min($day, $_SESSION['selectedDate']->format('t')) - 1) . ' days');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showMonth();
        }

        if (isset($_POST['monthNext'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $day = $_SESSION['selectedDate']->format('j');
            $DateTime->modify('first day of +1 month');
            $DateTime->modify('+' . (min($day, $_SESSION['selectedDate']->format('t')) - 1) . ' days');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showMonth();
        }

        if (isset($_POST['yearPrev'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $day = $_SESSION['selectedDate']->format('j');
            $DateTime->modify('first day of -1 year');
            $DateTime->modify('+' . (min($day, $_SESSION['selectedDate']->format('t')) - 1) . ' days');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showMonth();
        }

        if (isset($_POST['yearNext'])){
            $DateTime = new \DateTime($_SESSION['selectedDate']);
            $day = $_SESSION['selectedDate']->format('j');
            $DateTime->modify('first day of +1 year');
            $DateTime->modify('+' . (min($day, $_SESSION['selectedDate']->format('t')) - 1) . ' days');
            $_SESSION['selectedDate'] = $DateTime->format("d.m.Y");

            $this->showMonth();
        }
    }


    /**
     * This function shows the statistic for the specific day.
     * The bar chart shows how much time was spent for each activity on that day.
     */
    public function showDay(){
        $data['title'] = 'Statistics';
        $data['statisticsHeader'] = $_SESSION['selectedDate'];

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
            array_push($data['timeSpent'], $this->StatisticsModel->getTimeSpent($category, $_SESSION['selectedDate']));
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
        echo view('pages/statistics/dayHeader', $data);
        echo view('pages/statistics/body', $data);
        echo view('templates/Footer');
    }

    /**
     * This function shows the statistic for the specific week.
     * The bar chart shows how much time was spent on each day of that week.
     */
    public function showWeek(){
        $data['title'] = 'Statistics';
        $date = new \DateTime(date('d.m.Y', strtotime($_SESSION['selectedDate'])));
        $data['statisticsHeader'] = $date->format("W") . 'te Kalenderwoche';

        // todo query h/day
        $DateTime = new \DateTime();
        $DateTime -> setISODate(date('Y', strtotime($_SESSION['selectedDate'])), $data['statisticsHeader']);

        $data['monday'] = $DateTime -> format('d.m.Y');
        $DateTime -> modify('+1 Day');
        $data['tuesday'] = $DateTime -> format('d.m.Y');
        $DateTime -> modify('+1 Day');
        $data['wednesday'] = $DateTime -> format('d.m.Y');
        $DateTime -> modify('+1 Day');
        $data['thursday'] = $DateTime -> format('d.m.Y');
        $DateTime -> modify('+1 Day');
        $data['friday'] = $DateTime -> format('d.m.Y');
        $DateTime -> modify('+1 Day');
        $data['saturday'] = $DateTime -> format('d.m.Y');
        $DateTime -> modify('+1 Day');
        $data['sunday'] = $DateTime -> format('d.m.Y');




        $data['dataPoints'] = array();


        echo view('templates/header', $data);
        echo view('scripts/statistics');
        echo view('pages/statistics/weekHeader', $data);
        echo view('pages/statistics/body', $data);
        echo view('templates/Footer');
    }

    /**
     * This function shows the statistic for the specific month.
     * The bar chart shows how much time was spent on each day of that month.
     */
    public function showMonth(){
        $data['title'] = 'Statistics';
        $date = new \DateTime(date('d.m.Y', strtotime($_SESSION['selectedDate'])));
        $data['statisticsHeader'] = $date->format("M"); // TODO long month name

        // todo query h/day
        $data['dataPoints'] = array(
            // TODO
            array("y" => 7,"label" => "Uni" ),
            array("y" => 12,"label" => "Arbeit" ),
            array("y" => 28,"label" => "Freizeit" )
        );

        echo view('templates/header', $data);
        echo view('scripts/statistics');
        echo view('pages/statistics/monthHeader', $data);
        echo view('pages/statistics/body', $data);
        echo view('templates/Footer');
    }

    /**
     * This function shows the statistic for the specific year.
     * The bar chart shows how much time was spent in each month of that year.
     */
    public function showYear(){
        $data['title'] = 'Statistics';
        $date = new \DateTime(date('d.m.Y', strtotime($_SESSION['selectedDate'])));
        $data['statisticsHeader'] = $date->format("Y");

        // todo query h/month
        $data['dataPoints'] = array(
            // TODO
            array("y" => 7,"label" => "Uni" ),
            array("y" => 12,"label" => "Arbeit" ),
            array("y" => 28,"label" => "Freizeit" )
        );

        echo view('templates/header', $data);
        echo view('scripts/statistics');
        echo view('pages/statistics/yearHeader', $data);
        echo view('pages/statistics/body', $data);
        echo view('templates/Footer');
    }
}