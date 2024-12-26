<?php

namespace App\Controllers;

use \App\Models\PesanModel;

class Pesan extends BaseController
{
    private $pesanModel;
    public function __construct()
    {
        $this->pesanModel = new PesanModel();
    }

    public function index()
    {
        $pesanModel = new PesanModel();
        $dataPesan = $this->pesanModel->findAll();
        $data = [
            'title ' => 'Pesan',
            'result' => $dataPesan
        ];
        return view('pesan/index', $data);
    }

    public function contact()
    {
        $data = [
            'title ' => 'contact'
        ];
        return view('pesan/contact', $data);
    }

    public function create()
    {
        $data = [
            'title ' => 'Pesan'
        ];
        return view('pesan/create', $data);
    }

    public function save()
    {    
       $this->pesanModel->save([
        'nama'=> $this->request->getVar('nama'),
        'email'=> $this->request->getVar('email'),
        'subject'=> $this->request->getVar('subject'),
        'message'=> $this->request->getVar('message'),
       ]);

       session()->setFlashdata("msg", "Data Berhasil ditambahkan");
       return redirect()->to('/pesan/contact');
    }

    public function detail($id)
    {
        $dataPesan = $this->pesanModel->getPesan($id);
        $data = [
            'title ' => 'Detail Pesan',
            'result' => $dataPesan
        ];
        return view('pesan/detail', $data);
    }
}