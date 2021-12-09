<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DoctorModel;

class Doctor extends Controller
{
    public function index()
    {
        $model = new DoctorModel();
        $data['doctor'] = $model->getDoctor();
        echo view('doctor_view', $data);
    }

    public function add_new()
    {
        echo view('add_doctor');
    }

    public function save()
    {
        $model = new DoctorModel();
        $data = array(
            'id_doctor'  => $this->request->getPost('id_doctor'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'Spesialis' => $this->request->getPost('Spesialis'),
        );  
        $model->saveDoctor($data);
        return redirect()->to(base_url("doctor"));
    }

    public function edit($id)
    {
        $model = new DoctorModel();
        $data['doctor'] = $model->getDoctor($id)->getRow();
        echo view('edit_doctor', $data);
    }

    public function update()
    {
        $model = new DoctorModel();
        $id = $this->request->getPost('id_doctor');
        $data = array(
            'id_doctor'  => $this->request->getPost('id_doctor'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'JenisKelamin' => $this->request->getPost('JenisKelamin'),
            'Spesialis' => $this->request->getPost('Spesialis'),

        );
        $model->updateDoctor($data, $id);
        return redirect()->to(base_url("doctor"));
    }

    public function delete($id)
    {
        $model = new DoctorModel();
        $data['doctor'] = $model->getDoctor($id)->getRow();
        $model->deleteDoctor($id);
        return redirect()->to(base_url("doctor"));
    }
}
