<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HouseholdModel;

class HouseholdController extends Controller
{
    public $houseModel;
    public function __construct()
    {
        $this->houseModel = new HouseholdModel;
    }

    public function householdList()
    {
        $data['houseOne'] = $this->houseModel->houseUno();
        $data['houseTwo'] = $this->houseModel->houseDos();
        $data['houseThree'] = $this->houseModel->houseTres();
        $data['houseFour'] = $this->houseModel->houseKwatro();
        $data['houseFive'] = $this->houseModel->houseSingko();
        $data['houseSix'] = $this->houseModel->houseSays();
        $data['houseSeven'] = $this->houseModel->houseSyete();

        return view("household/household_table", $data);
    }
}
