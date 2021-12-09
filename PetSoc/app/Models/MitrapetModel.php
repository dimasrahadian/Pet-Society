<?php

namespace App\Models;

use CodeIgniter\Model;

class MitrapetModel extends Model
{
    protected $table = 'mitrapet';
    public function getMitrapet($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_mitrapet' => $id]);
        }
    }

    public function saveMitrapet($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateMitrapet($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_mitrapet' => $id));
        return $query;
    }

    public function deleteMitrapet($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_mitrapet' => $id));
        return $query;
    }
}
