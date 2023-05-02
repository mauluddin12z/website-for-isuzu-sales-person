<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Newsinfo_model extends CI_Model
{

    public function getNewsinfo()
    {
        return $this->db->query("SELECT * FROM news_info ORDER BY newsinfo_date desc")->result_array();
    }

    public function getNewsinfobyId($id_newsinfo)
    {
        return $this->db->query("SELECT * FROM news_info WHERE id_newsinfo = '$id_newsinfo' ORDER BY newsinfo_date desc")->result_array();
    }

    public function tambahNewsinfo()
    {
        $newsinfo_picture = $_FILES['newsinfo_picture'];
        if ($newsinfo_picture = '') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>Gagal</strong> ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        } else {
            $config['upload_path'] = './assets/newsinfo';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('newsinfo_picture')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Gambar <strong>Gagal</strong> diupload!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            } else {
                $newsinfo_picture = $this->upload->data('file_name');
            }
        }
        $random_words = rand();
        $primary_key = 'ni-' . md5($random_words);
        if ($this->db->query("SELECT * FROM news_info WHERE id_newsinfo = '$primary_key'")->row() !== NULL) {
            $random_words = rand();
            $primary_key = 'ni-' . md5($random_words);
        }
        $data = [
            "id_newsinfo" => $primary_key,
            "newsinfo_date" => $this->input->post("newsinfo_date", true),
            "newsinfo_title" => $this->input->post("newsinfo_title", true),
            "newsinfo_description" => $this->input->post("newsinfo_description", true),
            "newsinfo_picture" => $newsinfo_picture
        ];
        $this->db->insert('news_info', $data);
    }


    public function editNewsinfo($id_newsinfo)
    {
        $newsinfo_picture = $_FILES['newsinfo_picture'];
        if ($newsinfo_picture = '') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>Gagal</strong> ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        } else {
            $config['upload_path'] = './assets/newsinfo';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            $ni = $this->db->query("SELECT * FROM news_info where id_newsinfo='$id_newsinfo'")->row();
            if (!$this->upload->do_upload('newsinfo_picture')) {
                $newsinfo_picture = $ni->newsinfo_picture;
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Gambar <strong>Gagal</strong> diupload!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            } else {
                $newsinfo_picture = $this->upload->data('file_name');
            }
        }
        $data = [
            "newsinfo_date" => $this->input->post("newsinfo_date", true),
            "newsinfo_title" => $this->input->post("newsinfo_title", true),
            "newsinfo_description" => $this->input->post("newsinfo_description", true),
            "newsinfo_picture" => $newsinfo_picture
        ];
        $this->db->where('id_newsinfo', $id_newsinfo);
        $this->db->update('news_info', $data);
    }


    public function hapusNewsinfo($id_newsinfo)
    {
        $ni = $this->db->query("SELECT * FROM news_info where id_newsinfo='$id_newsinfo'")->row();
        $file_loc = [
            FCPATH . '/assets/newsinfo/' . $ni->newsinfo_picture,
        ];
        $length = count($file_loc);
        for ($i = 0; $i < $length; $i++) {
            if (is_readable($file_loc[$i])) {
                unlink($file_loc[$i]);
            }
        }
        $this->db->where('id_newsinfo', $id_newsinfo);
        $this->db->delete('news_info');
    }
}
