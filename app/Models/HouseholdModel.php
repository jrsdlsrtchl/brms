<?php

namespace App\Models;

use CodeIgniter\Model;

class HouseholdModel extends Model
{
    public function houseUno()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-1')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseDos()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-2')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseTres()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-3')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseKwatro()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-4')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseSingko()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-5')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseSays()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-6')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseSyete()
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', 'Purok-7')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
}
