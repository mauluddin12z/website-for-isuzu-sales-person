<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Galeri_model extends CI_Model
{

    public function getGaleriFoto()
    {
        return $this->db->query("SELECT * FROM galeri WHERE kategori_galeri = 'foto' ORDER BY galeri_date desc")->result_array();
    }
    public function getGaleriVideo()
    {
        return $this->db->query("SELECT * FROM galeri WHERE kategori_galeri = 'video' ORDER BY galeri_date desc")->result_array();
    }
    public function getGaleribyId($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('galeri_date DESC');
        return $this->db->get()->result_array();
    }

    public function tambahGaleriFoto()
    {
        $galeri_item = $_FILES['galeri_item'];
        if ($galeri_item = '') {
        } else {
            $config['upload_path'] = './assets/galeri';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('galeri_item')) {
            } else {
                $galeri_item = $this->upload->data('file_name');
            }
        }
        $random_words = rand();
        $primary_key = 'glr-' . md5($random_words);
        if ($this->db->query("SELECT * FROM galeri where id_galeri='$primary_key'")->row() !== NULL) {
            $random_words = rand();
            $primary_key = 'glr-' . md5($random_words);
        }
        $data = [
            "id_galeri" => $primary_key,
            "galeri_date" => date('Y-m-d'),
            "kategori_galeri" => $this->input->post("kategori_galeri", true),
            "galeri_item" => $galeri_item
        ];
        $this->db->insert('galeri', $data);
    }

    public function tambahGaleriVideo()
    {
        $random_words = rand();
        $primary_key = 'glr-' . md5($random_words);
        $galeri_item = $this->input->post("galeri_item", true);
        $galeri_item_replaced = str_replace('watch?v=', 'embed/', $galeri_item);
        if ($this->db->query("SELECT * FROM galeri where id_galeri='$primary_key'")->row() !== NULL) {
            $random_words = rand();
            $primary_key = 'glr-' . md5($random_words);
        }
        $data = [
            "id_galeri" => $primary_key,
            "galeri_date" => date('Y-m-d'),
            "kategori_galeri" => $this->input->post("kategori_galeri", true),
            "galeri_item" => $galeri_item_replaced
        ];
        $this->db->insert('galeri', $data);
    }

    public function hapusGaleri($id_galeri)
    {
        $g = $this->db->query("SELECT * FROM galeri where id_galeri='$id_galeri'")->row();
        $file_loc = [
            FCPATH . '/assets/galeri/' . $g->galeri_item,
        ];
        $length = count($file_loc);
        for ($i = 0; $i < $length; $i++) {
            if (is_readable($file_loc[$i])) {
                unlink($file_loc[$i]);
            }
        }
        $this->db->where('id_galeri', $id_galeri);
        $this->db->delete('galeri');
    }
}
