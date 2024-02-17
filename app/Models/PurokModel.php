<?php

namespace App\Models;

use CodeIgniter\Model;

class PurokModel extends Model
{

    public function viewPurok($puroknumber)
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok', $puroknumber)->get();
        $result = $builder->getResultArray();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokUno()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-1');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokDos()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-2');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokTres()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-3');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokKwatro()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-4');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokSingko()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-5');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokSays()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-6');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokSyete()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-7');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokUno()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-1')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokDos()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-2')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokTres()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-3')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokKwatro()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-4')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokSingko()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-5')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokSays()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-6')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokSyete()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok')->where('purok', 'Purok-7')->where('hh_head', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }
}
