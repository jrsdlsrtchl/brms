<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ResidentModel;

class ResidentController extends Controller
{
    public $resModel;
    public function __construct()
    {
        helper("form");
        $this->resModel = new ResidentModel();
    }

    public function addResident()
    {
        $data = [];
        $data['pageTitle'] = 'Resident';
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $uniid = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
            $resData = [
                'lname' => $this->request->getVar('lname'),
                'fname' => $this->request->getVar('fname'),
                'mname' => $this->request->getVar('mname'),
                'suffix' => $this->request->getVar('suffix'),
                'nname' => $this->request->getVar('nname'),
                'datebirth' => $this->request->getVar('datebirth'),
                'placebirth' => $this->request->getVar('placebirth'),
                'civilstat' => $this->request->getVar('civilstat'),
                'ethnic' => $this->request->getVar('ethnic'),
                'education' => $this->request->getVar('education'),
                'citizenship' => $this->request->getVar('citizenship'),
                'age' => $this->request->getVar('age'),
                'gender' => $this->request->getVar('gender'),
                'religion' => $this->request->getVar('religion'),
                'occupation' => $this->request->getVar('occupation'),
                'mobile' => $this->request->getVar('mobile'),
                'forkeeps' => $this->request->getVar('forkeeps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior_citizen' => $this->request->getVar('senior_citizen'),
                'house_pos' => $this->request->getVar('house_pos'),
                'hh_head' => $this->request->getVar('hh_head'),
                'purok' => $this->request->getVar('purok'),
                'user_type' => $this->request->getVar('user_type'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'uniid' => $uniid,
            ];

            $status = $this->resModel->addRes($resData);

            if ($status) {
                $session->setTempdata('success', 'Added Successfully', 3);
                return redirect()->to(base_url() . "residentcontroller/addresident");
            } else {
                $session->setTempdata('error', 'Not Added! Try Again!', 3);
                return redirect()->to(base_url() . "residentcontroller/addresident");
            }
        }
        return view("resident/res_add", $data);
    }

    public function viewResident()
    {
        $data['residents'] = $this->resModel->viewRes();
        $data['pageTitle'] = 'Resident';
        return view("resident/res_view", $data);
    }

    public function editResident($id)
    {
        $data = [];
        $data['residents'] = $this->resModel->editRes($id);
        $data['pageTitle'] = 'Resident';
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $resData = [
                'lname' => $this->request->getVar('lname'),
                'fname' => $this->request->getVar('fname'),
                'mname' => $this->request->getVar('mname'),
                'suffix' => $this->request->getVar('suffix'),
                'nname' => $this->request->getVar('nname'),
                'datebirth' => $this->request->getVar('datebirth'),
                'placebirth' => $this->request->getVar('placebirth'),
                'civilstat' => $this->request->getVar('civilstat'),
                'ethnic' => $this->request->getVar('ethnic'),
                'education' => $this->request->getVar('education'),
                'citizenship' => $this->request->getVar('citizenship'),
                'age' => $this->request->getVar('age'),
                'gender' => $this->request->getVar('gender'),
                'religion' => $this->request->getVar('religion'),
                'occupation' => $this->request->getVar('occupation'),
                'mobile' => $this->request->getVar('mobile'),
                'forkeeps' => $this->request->getVar('forkeeps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior_citizen' => $this->request->getVar('senior_citizen'),
                'house_pos' => $this->request->getVar('house_pos'),
                'hh_head' => $this->request->getVar('hh_head'),
                'purok' => $this->request->getVar('purok'),
                'user_type' => $this->request->getVar('user_type'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            ];

            $status = $this->resModel->updateRes($resData, $id);

            if ($status) {
                $session->setTempdata('success', 'Updated Successfully', 3);
                return redirect()->to(base_url() . "residentcontroller/viewresident");
            } else {
                $session->setTempdata('error', 'No updates were made', 3);
                return redirect()->to(base_url() . "residentcontroller/viewresident");
            }
        }
        return view("resident/res_edit", $data);
    }


    public function deleteResident($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->resModel->deleteRes($id);

        if (!$delete) {
            $session->setTempdata('error', 'Deleted Successfully', 3);
            return redirect()->to(base_url() . "residentcontroller/viewresident");
        } else {
            $session->setTempdata('error', 'Was not Deleted', 3);
            return redirect()->to(base_url() . "residentcontroller/viewresident");
        }
    }


    public function viewResOnly($id)
    {
        $data['residents'] = $this->resModel->editRes($id);
        $data['pageTitle'] = 'Resident';
        return view("resident/res_singleview", $data);
    }

    public function practice()
    {

        $data['purok'] = $this->resModel->choicePurok();

        return view("practice", $data);
    }

    public function selectHH()
    {
        $data['purok'] = $this->resModel->choicePurok();

        $resID = $this->request->getPost('puroknumber');

        $data['households'] = $this->resModel->choiceHousehold($resID);

        return view("practice", $data);
    }
}
