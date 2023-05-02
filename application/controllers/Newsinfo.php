<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newsinfo extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'News & Info ISUZU';
        $data['newsinfo'] = $this->Newsinfo_model->getNewsinfo();
        $data['productsCategory'] = $this->Products_model->getProductsCategory();
        $this->load->view('templates/header', $data);
        $this->load->view('newsinfo/index');
        $this->load->view('templates/footer');
    }
    public function detail($id_newsinfo)
    {
        $data['judul'] = 'News & Info ISUZU';
        $data['newsinfo'] = $this->Newsinfo_model->getNewsinfo();
        $data['productsCategory'] = $this->Products_model->getProductsCategory();
        $data['newsinfobyId'] = $this->Newsinfo_model->getNewsinfobyId($id_newsinfo);
        $this->load->view('templates/header', $data);
        $this->load->view('newsinfo/detail');
        $this->load->view('templates/footer');
    }

    public function newsinfoData()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'News & Info ISUZU';
            $data['newsinfo'] = $this->Newsinfo_model->getNewsinfo();
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('newsinfo/newsinfoData');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function tambahNewsinfo()
    {
        if ($this->session->userdata('username')) {
            $id_newsinfo = null;
            $data['judul'] = 'News & Info ISUZU';
            $data['nama_proses'] = 'prosesTambahNewsinfo';
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $data['newsinfo'] = $this->Newsinfo_model->getNewsinfo();
            $data['newsinfobyid'] = $this->Newsinfo_model->getNewsinfobyId($id_newsinfo);
            $this->load->view('templates/header', $data);
            $this->load->view('newsinfo/formNewsinfo');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function editNewsinfo($id_newsinfo)
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'News & Info ISUZU';
            $data['nama_proses'] = 'prosesEditNewsinfo';
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $data['newsinfo'] = $this->Newsinfo_model->getNewsinfo();
            $data['newsinfobyid'] = $this->Newsinfo_model->getNewsinfobyId($id_newsinfo);
            $this->load->view('templates/header', $data);
            $this->load->view('newsinfo/formNewsinfo');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }

    public function prosesTambahNewsinfo()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Tambah Newsinfo';
            $this->Newsinfo_model->tambahNewsinfo();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Data <strong>berhasil</strong> ditambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('newsinfo/tambahNewsinfo');
        } else {
            redirect('landing_page');
        }
    }

    public function prosesEditNewsinfo($id_newsinfo)
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Edit News & Info';
            $this->Newsinfo_model->editNewsinfo($id_newsinfo);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>berhasil</strong> diedit!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('newsinfo/editNewsinfo/' . $id_newsinfo);
        } else {
            redirect('landing_page');
        }
    }

    public function proseshapusNewsinfo()
    {
        if ($this->session->userdata('username')) {
            $id_newsinfo = $this->uri->segment(3);
            if (!$id_newsinfo == NULL) {
                $data['judul'] = 'Hapus News & Info';
                $this->Newsinfo_model->hapusNewsinfo($id_newsinfo);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Data <strong>berhasil</strong> dihapus!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('newsinfo/newsinfoData');
            }
            redirect('newsinfo/newsinfoData');
        } else {
            redirect('landing_page');
        }
    }
}
