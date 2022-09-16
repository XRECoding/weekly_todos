<?php namespace App\Controllers;
use Cassandra\Date;
use CodeIgniter\Controller;

class WeekOverview extends BaseController {

    public function index() {
        $data['title'] = 'WeekOverview';

        $data['week'] = date("W"); //  calender week
        // calculates the date for the individual days of the week
        $data['monday'] = date('d.m.Y', strtotime("this week monday"));
        $data['tuesday'] = date('d.m.Y', strtotime("this week tuesday"));
        $data['wednesday'] = date('d.m.Y', strtotime("this week wednesday"));
        $data['thursday'] = date('d.m.Y', strtotime("this week thursday"));
        $data['friday'] = date('d.m.Y', strtotime("this week friday"));
        $data['saturday'] = date('d.m.Y', strtotime("this week saturday"));
        $data['sunday'] = date('d.m.Y', strtotime("this week sunday"));
        $data['my-input'] = date('d.m.Y', strtotime("this week sunday"));

        echo view('templates/header', $data);
        echo view('pages/WeekOverview', $data);
        echo view('templates/Footer');
    }

    /**
     * This method redirects the user to day specific to-do-list.
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function button_filter(){
        if (isset($_POST['monday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }

        if (isset($_POST['tuesday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }

        if (isset($_POST['wednesday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }

        if (isset($_POST['thursday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }

        if (isset($_POST['friday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }

        if (isset($_POST['saturday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }

        if (isset($_POST['sunday'])){
            return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
        }
    }

    /**
     * This method calculates and shows the new dates of the week, once a date has been
     * selected and confirmed in the modal dialog.
     * @throws \Exception
     */
    public function pickDate(){
        $data['title'] = 'WeekOverview';

        // calculating new calendar week
        $date = new \DateTime(date('d.m.Y', strtotime($_POST["dateInput"])));
        $data['week'] = $date->format("W");

        // calculates the date for the individual days of the week
        $DateTime = new \DateTime();
        $DateTime -> setISODate(date('Y', strtotime($_POST["dateInput"])), $data['week']);

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
        $DateTime -> modify('+1 Day');
        $data['my-input'] = $DateTime -> format('d.m.Y');

        echo view('templates/header', $data);
        echo view('pages/WeekOverview', $data);
        echo view('templates/Footer');
    }
}

