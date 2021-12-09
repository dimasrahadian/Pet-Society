<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MitraproModel;

class Mitrapro extends Controller
{
    public function index()
    {
        $model = new MitraproModel();
        $data['mitrapro'] = $model->getMitrapro();
        echo view('mitrapro_view', $data);
    }

    public function add_new()
    {
        echo view('add_Mitrapro');
    }

    public function save()
    {
        $model = new MitraproModel();
        $data = array(
            'id_mitrapro'  => $this->request->getPost('id_mitrapro'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisUsaha' => $this->request->getPost('JenisUsaha'),
        );  
        $model->saveMitrapro($data);
        return redirect()->to(base_url("mitrapro"));
    }

    public function edit($id)
    {
        $model = new MitraproModel();
        $data['mitrapro'] = $model->getMitrapro($id)->getRow();
        echo view('edit_mitrapro', $data);
    }

    public function update()
    {
        $model = new MitraproModel();
        $id = $this->request->getPost('id_mitrapro');
        $data = array(
            'id_mitrapro'  => $this->request->getPost('id_mitrapro'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisUsaha' => $this->request->getPost('JenisUsaha'),

        );
        $model->updateMitrapro($data, $id);
        return redirect()->to(base_url("mitrapro"));
    }

    public function delete($id)
    {
        $model = new MitraproModel();
        $data['mitrapro'] = $model->getMitrapro($id)->getRow();
        $model->deleteMitrapro($id);
        return redirect()->to(base_url("mitrapro"));
    }
}
