<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\DashboardModel;

class DashboardController extends Controller
{
    public $dashModel;
    public function __construct()
    {
        $this->dashModel = new DashboardModel();
    }

    public function dashBoard()
    {
        $data['population'] = $this->dashModel->numPopulation();
        $data['male'] = $this->dashModel->numMale();
        $data['female'] = $this->dashModel->numFemale();
        $data['household'] = $this->dashModel->numHousehold();
        $data['senior'] = $this->dashModel->numSeniorCitizen();
        $data['pwd'] = $this->dashModel->numPwd();
        $data['fourPs'] = $this->dashModel->num4ps();

        return view("dashboard", $data);
    }
}
