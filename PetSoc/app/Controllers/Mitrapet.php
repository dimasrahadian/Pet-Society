<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MitrapetModel;

class Mitrapet extends Controller
{
    public function index()
    {
        $model = new MitrapetModel();
        $data['mitrapet'] = $model->getMitrapet();
        echo view('mitrapet_view', $data);
    }

    public function add_new()
    {
        echo view('add_Mitrapet');
    }

    public function save()
    {
        $model = new MitrapetModel();
        $data = array(
            'id_mitrapet'  => $this->request->getPost('id_mitrapet'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'NoTelp' => $this->request->getPost('Notelp'),
            'Treatment' => $this->request->getPost('Treatment'),
        );  
        $model->saveMitrapet($data);
        return redirect()->to(base_url("mitrapet"));
    }

    public function edit($id)
    {
        $model = new MitrapetModel();
        $data['mitrapet'] = $model->getMitrapet($id)->getRow();
        echo view('edit_mitrapet', $data);
    }

    public function update()
    {
        $model = new MitrapetModel();
        $id = $this->request->getPost('id_mitrapet');
        $data = array(
            'id_mitrapet'  => $this->request->getPost('id_mitrapet'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'NoTelp' => $this->request->getPost('Notelp'),
            'Treatment' => $this->request->getPost('Treatment'),

        );
        $model->updateMitrapet($data, $id);
        return redirect()->to(base_url("mitrapet"));
    }

    public function delete($id)
    {
        $model = new MitrapetModel();
        $data['mitrapet'] = $model->getMitrapet($id)->getRow();
        $model->deleteMitrapet($id);
        return redirect()->to(base_url("mitrapet"));
    }
}
