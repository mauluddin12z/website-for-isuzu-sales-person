<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Galeri ISUZU';
        $data['galeriFoto'] = $this->Galeri_model->getGaleriFoto();
        $data['galeriVideo'] = $this->Galeri_model->getGaleriVideo();
        $data['productsCategory'] = $this->Products_model->getProductsCategory();
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/index');
        $this->load->view('templates/footer');
    }
    public function galeriFoto()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Galeri ISUZU';
            $data['galeriFoto'] = $this->Galeri_model->getGaleriFoto();
            $data['galeriVideo'] = $this->Galeri_model->getGaleriVideo();
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('galeri/galerifoto');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function galeriVideo()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Galeri ISUZU';
            $data['galeriFoto'] = $this->Galeri_model->getGaleriFoto();
            $data['galeriVideo'] = $this->Galeri_model->getGaleriVideo();
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('galeri/galerivideo');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function tambahGaleriFoto()
    {
        if ($this->session->userdata('username')) {
            $id_galeri = null;
            $data['judul'] = 'Tambah Galeri';
            $data['nama_proses'] = 'prosesTambahGaleriFoto';
            $data['galeriFoto'] = $this->Galeri_model->getGaleriFoto();
            $data['galeriVideo'] = $this->Galeri_model->getGaleriVideo();
            $data['galeribyId'] = $this->Galeri_model->getGaleribyId($id_galeri);
            $this->load->view('templates/header', $data);
            $this->load->view('galeri/formGaleri');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function tambahGaleriVideo()
    {
        if ($this->session->userdata('username')) {
            $id_galeri = null;
            $data['judul'] = 'Tambah Galeri';
            $data['nama_proses'] = 'prosesTambahGaleriVideo';
            $data['galeriFoto'] = $this->Galeri_model->getGaleriFoto();
            $data['galeriVideo'] = $this->Galeri_model->getGaleriVideo();
            $data['galeribyId'] = $this->Galeri_model->getGaleribyId($id_galeri);
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('galeri/formGaleri');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }

    public function prosesTambahGaleriFoto()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Tambah Galeri';
            $this->Galeri_model->tambahGaleriFoto();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Data <strong>berhasil</strong> ditambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('galeri/tambahGaleriFoto');
        } else {
            redirect('landing_page');
        }
    }

    public function prosesTambahGaleriVideo()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Tambah Galeri';
            $this->Galeri_model->tambahGaleriVideo();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Data <strong>berhasil</strong> ditambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('galeri/tambahGaleriVideo');
        } else {
            redirect('landing_page');
        }
    }
    public function proseshapusGaleri()
    {
        if ($this->session->userdata('username')) {
            $id_galeri = $this->uri->segment(3);
            if (!$id_galeri == NULL) {
                $data['judul'] = 'Hapus Galeri';
                $this->Galeri_model->hapusGaleri($id_galeri);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Data <strong>berhasil</strong> dihapus!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('galeri/galeriData');
            }
            redirect('galeri/galeriData');
        } else {
            redirect('landing_page');
        }
    }
}
