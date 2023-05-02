<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Products_model extends CI_Model
{

    public function getProducts()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('products_category', 'products_category.id_kp = products.id_kp');
        $this->db->order_by('produk DESC');
        return $this->db->get()->result_array();
    }
    public function getProductsbyId($id_p)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('products_category', 'products_category.id_kp = products.id_kp');
        $this->db->where('id_product', $id_p);
        $this->db->order_by('produk DESC');
        return $this->db->get()->result_array();
    }
    public function getProductsForDetail($id_kp)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id_kp', $id_kp);
        $this->db->order_by('produk ASC');
        return $this->db->get()->result_array();
    }

    public function getProductsCategorybyId($id_kp)
    {
        $this->db->select('*');
        $this->db->from('products_category');
        $this->db->order_by('kategori_produk ASC');
        $this->db->where('id_kp', $id_kp);
        return $this->db->get()->result_array();
    }
    public function getProductsCategory()
    {
        $this->db->select('*');
        $this->db->from('products_category');
        $this->db->order_by('kategori_produk ASC');
        return $this->db->get()->result_array();
    }
    public function getProductsCategoryRandom()
    {
        return $this->db->query("SELECT * FROM products_category ORDER BY rand()")->result_array();
    }

    public function getProductsDetail($id_kp)
    {
        $this->db->select('*');
        $this->db->from('products_category');
        $this->db->where('id_kp', $id_kp);
        $this->db->order_by('kategori_produk ASC');
        return $this->db->get()->result_array();
    }


    /* Produk */
    public function tambahProducts()
    {
        $primary_key = 'prd-' . md5(rand());
        if ($this->db->query("SELECT * FROM products where id_product='$primary_key'")->row() !== NULL) {
            $random_words = rand();
            $primary_key = 'prd' . md5($random_words);
        }
        $data = [
            "id_product" => $primary_key,
            "produk" => $this->input->post("produk", true),
            "id_kp" => $this->input->post("id_kp", true),
            "harga" => $this->input->post("harga", true),
        ];
        $this->db->insert('products', $data);
    }
    public function editProducts($id_p)
    {

        $data = [
            "produk" => $this->input->post("produk", true),
            "id_kp" => $this->input->post("id_kp", true),
            "harga" => $this->input->post("harga", true),
        ];
        $this->db->where('id_product', $id_p);
        $this->db->update('products', $data);
    }
    public function hapusProducts($id_p)
    {
        $this->db->where('id_product', $id_p);
        $this->db->delete('products');
    }

    /* Kategori Produk */

    public function tambahKategoriProducts()
    {
        $wallpaper_kategori = $_FILES['wallpaper_kategori'];
        $gambar_kategori = $_FILES['gambar_kategori'];
        $gambar_spek = $_FILES['gambar_spek'];
        $brosur = $_FILES['brosur'];
        if ($wallpaper_kategori = '' or $gambar_kategori = '' or $gambar_spek = '' or $brosur = '') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>Gagal</strong> ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        } else {
            $config['upload_path'] = './assets/products';
            $config['allowed_types'] = 'jpg|png|gif|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('wallpaper_kategori')) {
            } else {
                $wallpaper_kategori = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('gambar_kategori')) {
            } else {
                $gambar_kategori = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('gambar_spek')) {
            } else {
                $gambar_spek = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('brosur')) {
            } else {
                $brosur = $this->upload->data('file_name');
            }
        }
        $random_words = rand();
        $primary_key = 'kp-' . md5($random_words);
        if ($this->db->query("SELECT * FROM products_category where id_kp='$primary_key'")->row() !== NULL) {
            $random_words = rand();
            $primary_key = 'kp-' . md5($random_words);
        }
        $data = [
            "id_kp" => $primary_key,
            "wallpaper_kategori" => $wallpaper_kategori,
            "kategori_produk" => $this->input->post("kategori_produk", true),
            "deskripsi" => $this->input->post("deskripsi", true),
            "gambar_kategori" => $gambar_kategori,
            "gambar_spek" => $gambar_spek,
            "brosur" => $brosur
        ];
        $this->db->insert('products_category', $data);
    }

    public function editKategoriProduk($id_kp)
    {
        $wallpaper_kategori = $_FILES['wallpaper_kategori'];
        $gambar_kategori = $_FILES['gambar_kategori'];
        $gambar_spek = $_FILES['gambar_spek'];
        $brosur = $_FILES['brosur'];
        if ($wallpaper_kategori = '' or $gambar_kategori = '' or $gambar_spek = '' or $brosur = '') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>Gagal</strong> diedit!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        } else {
            $config['upload_path'] = './assets/products';
            $config['allowed_types'] = 'jpg|png|gif|pdf';

            $this->load->library('upload', $config);
            $pc = $this->db->query("SELECT * FROM products_category where id_kp='$id_kp'")->row();
            if (!$this->upload->do_upload('wallpaper_kategori')) {
                $wallpaper_kategori = $pc->wallpaper_kategori;
            } else {
                $wallpaper_kategori = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('gambar_kategori')) {
                $gambar_kategori = $pc->gambar_kategori;
            } else {
                $gambar_kategori = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('gambar_spek')) {
                $gambar_spek = $pc->gambar_spek;
            } else {
                $gambar_spek = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('brosur')) {
                $brosur = $pc->brosur;
            } else {
                $brosur = $this->upload->data('file_name');
            }
        }
        $data = [
            "wallpaper_kategori" => $wallpaper_kategori,
            "kategori_produk" => $this->input->post("kategori_produk", true),
            "deskripsi" => $this->input->post("deskripsi", true),
            "gambar_kategori" => $gambar_kategori,
            "gambar_spek" => $gambar_spek,
            "brosur" => $brosur
        ];
        $this->db->where('id_kp', $id_kp);
        $this->db->update('products_category', $data);
    }


    public function hapusKategoriProduk($id_kp)
    {
        $pc = $this->db->query("SELECT * FROM products_category where id_kp='$id_kp'")->row();
        $file_loc = [
            FCPATH . '/assets/products/' . $pc->wallpaper_kategori,
            FCPATH . '/assets/products/' . $pc->gambar_kategori,
            FCPATH . '/assets/products/' . $pc->gambar_spek,
            FCPATH . '/assets/products/' . $pc->brosur
        ];
        $length = count($file_loc);
        for ($i = 0; $i < $length; $i++) {
            if (is_readable($file_loc[$i])) {
                unlink($file_loc[$i]);
            }
        }
        $this->db->where('id_kp', $id_kp);
        $this->db->delete('products_category');
    }
}
