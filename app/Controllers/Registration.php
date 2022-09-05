<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Registration extends BaseController {

    public function test1() {
        $data['title'] = 'Registration';

        echo view('templates/header', $data);
        echo view('pages/test1');
        echo view('templates/Footer');
    }

    public function test2() {
        $data['title'] = 'Registration';

        echo view('templates/header', $data);
        echo view('pages/test2');
        echo view('templates/Footer');
    }

    public function test3() {
        $data['title'] = 'Registration';

        echo view('templates/header', $data);
        echo view('pages/test3');
        echo view('templates/Footer');
    }

}