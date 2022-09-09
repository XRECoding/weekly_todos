<?php namespace App\Controllers;
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

        echo view('templates/header', $data);
        echo view('pages/WeekOverview', $data);
        echo view('templates/Footer');
    }

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

    public function redirectCalendar(){
        return redirect()->to(base_url() . '/index.php/registration');  // TODO set correct link once page is created
    }
}