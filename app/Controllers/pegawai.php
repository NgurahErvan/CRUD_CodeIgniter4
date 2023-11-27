<?php

namespace App\Controllers;

use App\Models\pegawai_model;

class pegawai extends BaseController
{
    public function index(): void
    {
        $model = new pegawai_model();
        $data['title'] = 'Data pegawai';
        $data['pegawai'] = $model->getpegawai();
        echo view('templates/header', $data);
        echo view('home_view', $data);
        echo view('templates/footer', $data);
    }

    public function tambah(): void
    {
        $data['title'] = 'Tambah Data pegawai';
        echo view('templates/header', $data);
        echo view('tambah_view', $data);
        echo view('templates/footer', $data);
    }

    public function tambah_proses()
    {
        $model = new pegawai_model();
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'no_telp' => $this->request->getPost('no_telp'),
            'Umur' => $this->request->getPost('Umur'),
        ];
        $model->savepegawai($data);
        return redirect()->to(base_url());
    }

    public function edit($id)
    {
        $model = new pegawai_model();
        $pegawai = $model->getpegawai($id)->getRow();
        if (isset($pegawai)) {
            $data['pegawai'] = $pegawai;
            $data['title'] = 'Edit ' . $pegawai->nama;
            echo view('templates/header', $data);
            echo view('edit_view', $data);
            echo view('templates/footer', $data);
        } else {
            echo '<script>
            alert("Data tidak ditemukan!");
            window.location.href="' . base_url() . '";
            </script>';
        }
    }

    public function edit_proses()
    {
        $model = new pegawai_model();
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'no_telp' => $this->request->getPost('no_telp'),
            'Umur' => $this->request->getPost('Umur'),
        ];

            // Tangkap nilai $id dari formulir
        $id = $this->request->getPost('id');
        $model->editpegawai($data, $id);
        return redirect()->to(base_url());
    }

    public function hapus($id)
    {
        $model = new pegawai_model();
        $pegawai = $model->getpegawai($id)->getRow();
        if (isset($pegawai)) {
            $model->deletepegawai($id);
            return redirect()->to(base_url());
        } else {
            echo '<script>
            alert("Data tidak ditemukan!");
            window.location.href="' . base_url() . '";
            </script>';
        }
    }
}