<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use \App\Models\JobModel;
use \App\Models\CategoryModel;
use \App\Models\ApplyModel;
use TCPDF;


class Job extends BaseController
{
    private $jobModel, $catModel, $appModel;
    public function __construct()
    {
        $this->jobModel = new JobModel();
        $this->catModel = new CategoryModel();
        $this->appModel = new ApplyModel();
    }

    public function index()
    {
        $dataJob = $this->jobModel->getJob();
        $data = [
            'title ' => 'Job',
            'result' => $dataJob
        ];
        return view('job/index', $data);
    }

    public function create()
    {
        $data = [
            'title ' => 'Job',
            'category' => $this->catModel->findAll(),
        ];
        return view('job/create', $data);
    }

    public function save()
    {  
       $file_picture = $this->request->getFile('picture'); 

       if ($file_picture->getError() == 4) {

        $nama_file = $this->defaultImage;

       }else{

        $nama_file = $file_picture->getRandomName();
        $file_picture->move(
            'picture',
            $nama_file
        );

    }

       $this->jobModel->save([
        'nama_job'=> $this->request->getVar('nama_job'),
        'nama_perusahaan'=> $this->request->getVar('nama_perusahaan'),
        'syarat'=> $this->request->getVar('syarat'),
        'Gaji'=> $this->request->getVar('Gaji'),
        'jenis_pekerjaan'=> $this->request->getVar('jenis_pekerjaan'),
        'batas_pendaftaran'=> $this->request->getVar('batas_pendaftaran'),
        'id_category'=> $this->request->getVar('id_category'),
        'picture' => $nama_file
       ]);

       session()->setFlashdata("msg", "Data Berhasil ditambahkan");
       return redirect()->to('/job');
    }

    public function edit($id)
    {
        $dataJob = $this->jobModel->getJob($id);
        $data = [
            'title ' => 'Ubah Job',
            'category' => $this->catModel->findAll(),
            'result' => $dataJob
        ];
        return view('job/edit', $data);

    }

    public function update($id)
    {  
        $nama_picture_lama = $this->request->getFile('picturelama');
       
        $file_picture = $this->request->getFile('picture'); 

        if ($file_picture->getError() == 4) {
 
         $nama_file =  $nama_picture_lama;
 
        }else{
 
         $nama_file = $file_picture->getRandomName();

         $file_picture->move('picture', $nama_file);

         if($nama_picture_lama != $this->defaultImage && $nama_picture_lama != "") {

            unlink('picture/' . $nama_picture_lama);
         }
 
     }
       
       $this->jobModel->save([
        'id_job' => $id,
        'nama_job'=> $this->request->getVar('nama_job'),
        'nama_perusahaan'=> $this->request->getVar('nama_perusahaan'),
        'syarat'=> $this->request->getVar('syarat'),
        'Gaji'=> $this->request->getVar('Gaji'),
        'jenis_pekerjaan'=> $this->request->getVar('jenis_pekerjaan'),
        'batas_pendaftaran'=> $this->request->getVar('batas_pendaftaran'),
        'id_category'=> $this->request->getVar('id_category'),
        'picture' => $nama_file
       ]);

       session()->setFlashdata("msg", "Data Berhasil diubah");
       return redirect()->to('/job');
    }


    public function delete($id)
    {  
       $dataJob = $this->jobModel->find($id);
       $this->jobModel->delete($id);

       if ($dataJob['picture'] != $this->defaultImage) {

        unlink('picture/' . $dataJob['picture']);

       }
       session()->setFlashdata("msg", "Data Berhasil dihapus");
       return redirect()->to('/job');
    }
    
    public function about()
    {
        $data = [
            'title ' => 'about'
        ];
        return view('job/about', $data);
    }

    public function category()
    {
        $data = [
            'title ' => 'category'
        ];
        return view('job/category', $data);
    }

    public function testimonial()
    {
        $data = [
            'title ' => 'testimonial'
        ];
        return view('job/testimonial', $data);
    }

    public function detail($id)
    {
        $dataJob = $this->jobModel->getJob($id);
        $data = [
            'title ' => 'Detail Job',
            'result' => $dataJob
        ];
        return view('job/detail', $data);
    }

    public function apply()
    {
        $dataApply = $this->appModel->getApply();
        $data = [
            'title' => 'apply',
            'job' => $this->jobModel->findAll(),
            'result' => $dataApply
        ];
        return view('job/apply', $data);
    }

    public function submit()
    {        
        $file_doc = $this->request->getFile('pdf');

        if ($file_doc && $file_doc->isValid()) {
            if ($file_doc->getError() == 4) {
                $nama_file = $this->defaultPDF;
            } else {
                $nama_file = $file_doc->getRandomName();
                // Menyimpan file ke folder uploads/pdf
                if ($file_doc->move(WRITEPATH . 'uploads/pdf', $nama_file)) {
                    echo "File berhasil disimpan sebagai: " . $nama_file;
                } else {
                    echo "Error: Gagal memindahkan file.";
                }
            }
        } else {
            echo "File upload error: " . $file_doc->getErrorString();
        }
            
        $this->appModel->save([
            'namalengkap'=> $this->request->getVar('namalengkap'),
            'alamatemail'=> $this->request->getVar('alamatemail'),
            'programstudi'=> $this->request->getVar('programstudi'),
            'pendidikan_terakhir'=> $this->request->getVar('pendidikan_terakhir'),
            'portofolio'=> $this->request->getVar('portofolio'),
            'id_job'=> $this->request->getVar('id_job'),     
            'cv' => $nama_file
        ]);

        session()->setFlashdata("msg", "Data Berhasil ditambahkan");
        return redirect()->to('/');
    }


    public function listapply()
    {
        $dataApply = $this->appModel->getApply();
        $data = [
            'title ' => 'Apply',
            'result' => $dataApply
        ];
        return view('job/listapply', $data);
    }

    public function detailapply($id)
    {
        $result = $this->appModel->find($id);
        if (!$result) {
            throw new \Exception("Data CV tidak ditemukan.");
        }
    
        // This is likely where you fetch the data for the application
        $dataApply = $this->appModel->getApply($id);
        // Here, you should pass the data to the view
        $data = [
            'title' => 'Detail Apply',
            'result' => $dataApply // Ensure this matches what your view expects
        ];
        return view('job/detailapply', $data);
    }
    
    public function downloadCVPDF($cvFileName) 
    {
        log_message('debug', 'Attempting to download CV with filename: ' . $cvFileName);
    
        // Define the base path where CV files are stored
        $basePath = WRITEPATH . 'uploads/pdf/';
        $filePath = $basePath . $cvFileName;
    
        // Check if the file exists
        if (!file_exists($filePath)) {
            log_message('error', 'CV file not found at path: ' . $filePath);
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data CV tidak ditemukan.");
        }
    
        // Serve the file as a download
        return $this->response->download($filePath, null)->setFileName($cvFileName);
    }
    

    
}

    
