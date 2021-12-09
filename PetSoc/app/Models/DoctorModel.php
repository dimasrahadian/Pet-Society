<?php

namespace App\Models;

use CodeIgniter\Model;

class DoctorModel extends Model
{
    protected $table = 'doctor';
    public function getDoctor($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_doctor' => $id]);
        }
    }

    public function saveDoctor($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateDoctor($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_doctor' => $id));
        return $query;
    }

    public function deleteDoctor($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_doctor' => $id));
        return $query;
    }
}
