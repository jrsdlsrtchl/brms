<?php

namespace App\Models;

use CodeIgniter\Model;

class ResidentModel extends Model
{
    public function addRes($data)
    {
        $this->db->table('residents')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function viewRes()
    {
        $query = $this->db->table('residents')->get();
        $result = $query->getResultArray();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }


    public function editRes($id)
    {
        $builder = $this->db->table('residents');
        $builder->where('uniid', $id);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRow();
        } else {
            return false;
        }
    }

    public function updateRes($data, $id)
    {
        $builder = $this->db->table('residents')->where('uniid', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRes($id)
    {
        $builder = $this->db->table('residents');
        $builder->delete(['uniid' => $id]);
    }

    public function choicePurok()
    {
        $query = $this->db->table('purok')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function choiceHousehold($purok)
    {
        $query = $this->db->table('residents');
        $builder = $query->where('purok_id', '$purok')->where('hh_head', 'Yes');
        $result = $builder->get()->getResultArray();

        return $result;
    }
}
