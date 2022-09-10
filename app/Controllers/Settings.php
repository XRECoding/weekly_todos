<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Settings extends BaseController {
    public function __construct() {
        $this->UserModel = new UserModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function index() {
        helper("form");
        $data['title'] = 'Einstellungen';
        echo "<pre>";
print_r($_SESSION);
echo "</pre>";

        echo view('templates/header', $data);
        echo view('pages/Settings');
        echo view('templates/Footer');
    }

    public function btnAction() {
        if (isset($_POST['btnBac'])) return redirect()->to(base_url().'/WeekOverview');
        if (isset($_POST['btnCat'])) return redirect()->to(base_url().'/Registration'); # Todo: Must be changed
        
        $this->session->unset_userdata("email");
        echo "<pre>";
print_r($_SESSION);
echo "</pre>";

    }
}        
#echo "<pre>";
#print_r($_SESSION);
#echo "</pre>";