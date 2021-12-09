<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraproModel extends Model
{
    protected $table = 'mitrapro';
    public function getMitrapro($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_mitrapro' => $id]);
        }
    }

    public function saveMitrapro($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateMitrapro($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_mitrapro' => $id));
        return $query;
    }

    public function deleteMitrapro($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_mitrapro' => $id));
        return $query;
    }
}
