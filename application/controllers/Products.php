<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Products ISUZU';
		$data['products'] = $this->Products_model->getProducts();
		$data['productsCategory'] = $this->Products_model->getProductsCategory();
		$this->load->view('templates/header', $data);
		$this->load->view('products/index');
		$this->load->view('templates/footer');
	}

	public function detail($id_kp)
	{
		$data['judul'] = 'Products ISUZU';
		$data['products'] = $this->Products_model->getProductsForDetail($id_kp);
		$data['productsCategory'] = $this->Products_model->getProductsCategory();
		$data['productsDetail'] = $this->Products_model->getProductsDetail($id_kp);
		$this->load->view('templates/header', $data);
		$this->load->view('products/detail');
		$this->load->view('templates/footer');
	}


	// produk
	public function productsData()
	{
		if ($this->session->userdata('username')) {
			$data['judul'] = 'Products';
			$data['products'] = $this->Products_model->getProducts();
			$data['productsCategory'] = $this->Products_model->getProductsCategory();
			$this->load->view('templates/header', $data);
			$this->load->view('products/productsData');
			$this->load->view('templates/footer');
		} else {
			redirect('landing_page');
		}
	}
	public function tambahProducts()
	{
		if ($this->session->userdata('username')) {
			$id_p = null;
			$data['judul'] = 'Products';
			$data['nama_proses'] = 'prosesTambahProducts';
			$data['products'] = $this->Products_model->getProducts();
			$data['productsCategory'] = $this->Products_model->getProductsCategory();
			$data['productsbyId'] = $this->Products_model->getProductsbyId($id_p);
			$this->load->view('templates/header', $data);
			$this->load->view('products/formProducts');
			$this->load->view('templates/footer');
		} else {
			redirect('landing_page');
		}
	}

	public function editProducts($id_p)
	{
		if ($this->session->userdata('username')) {
			$data['judul'] = 'Products';
			$data['nama_proses'] = 'prosesEditProducts';
			$data['products'] = $this->Products_model->getProducts();
			$data['productsCategory'] = $this->Products_model->getProductsCategory();
			$data['productsbyId'] = $this->Products_model->getProductsbyId($id_p);
			$this->load->view('templates/header', $data);
			$this->load->view('products/formProducts');
			$this->load->view('templates/footer');
		} else {
			redirect('landing_page');
		}
	}
	public function prosesTambahProducts()
	{
		if ($this->session->userdata('username')) {
			$data['judul'] = 'Tambah Products';
			$this->Products_model->tambahProducts();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
			Data <strong>berhasil</strong> ditambahkan!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('products/tambahProducts');
		} else {
			redirect('landing_page');
		}
	}
	public function prosesEditProducts($id_p)
	{
		if ($this->session->userdata('username')) {
			$id_p = $this->uri->segment(3);
			if (!$id_p == NULL) {
				$data['judul'] = 'Edit Products';
				$this->Products_model->editProducts($id_p);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
			Data <strong>berhasil</strong> diedit!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
				redirect('products/editProducts/' . $id_p);
			}
			redirect('products/editProducts/' . $id_p);
		} else {
			redirect('landing_page');
		}
	}
	public function prosesHapusProducts($id_p)
	{
		if ($this->session->userdata('username')) {
			$id_p = $this->uri->segment(3);
			if (!$id_p == NULL) {
				$data['judul'] = 'Hapus Products';
				$this->Products_model->hapusProducts($id_p);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
			Data <strong>berhasil</strong> dihapus!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
				redirect('products/productsData');
			}
			redirect('products/productsData');
		} else {
			redirect('landing_page');
		}
	}



	// kategori produk data
	public function kategoriProductsData()
	{
		if ($this->session->userdata('username')) {
			$data['judul'] = 'Products';
			$data['products'] = $this->Products_model->getProducts();
			$data['productsCategory'] = $this->Products_model->getProductsCategory();
			$this->load->view('templates/header', $data);
			$this->load->view('products/kategoriProductsData');
			$this->load->view('templates/footer');
		} else {
			redirect('landing_page');
		}
	}

	public function tambahKategoriProducts()
	{
		if ($this->session->userdata('username')) {
			$id_kp = null;
			$data['judul'] = 'Tambah Kategori Produk';
			$data['nama_proses'] = 'prosesTambahKategoriProducts';
			$data['products'] = $this->Products_model->getProducts();
			$data['productsCategory'] = $this->Products_model->getProductsCategory();
			$data['productsCategorybyId'] = $this->Products_model->getProductsCategorybyId($id_kp);
			$this->load->view('templates/header', $data);
			$this->load->view('products/formKategoriProducts');
			$this->load->view('templates/footer');
		} else {
			redirect('landing_page');
		}
	}
	public function editKategoriProducts($id_kp)
	{
		if ($this->session->userdata('username')) {
			$data['judul'] = 'Edit Kategori Produk';
			$data['nama_proses'] = 'prosesEditKategoriProducts';
			$data['products'] = $this->Products_model->getProducts();
			$data['productsCategory'] = $this->Products_model->getProductsCategory();
			$data['productsCategorybyId'] = $this->Products_model->getProductsCategorybyId($id_kp);
			$this->load->view('templates/header', $data);
			$this->load->view('products/formKategoriProducts');
			$this->load->view('templates/footer');
		} else {
			redirect('landing_page');
		}
	}
	public function prosesTambahKategoriProducts()
	{
		if ($this->session->userdata('username')) {
			$data['judul'] = 'Tambah Kategori Products';
			$this->Products_model->tambahKategoriProducts();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
				Data <strong>berhasil</strong> ditambahkan!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('products/tambahKategoriProducts');
		} else {
			redirect('landing_page');
		}
	}

	public function prosesEditKategoriProducts()
	{
		if ($this->session->userdata('username')) {
			$id_kp = $this->uri->segment(3);
			if (!$id_kp == NULL) {
				$data['judul'] = 'Edit Kategori Products';
				$this->Products_model->editKategoriProduk($id_kp);
				$data['productsCategorybyId'] = $this->Products_model->getProductsCategorybyId($id_kp);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
				Data <strong>berhasil</strong> diedit!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('products/editKategoriProducts/' . $id_kp);
			}
			redirect('products/kategoriProductsData');
		} else {
			redirect('landing_page');
		}
	}

	public function prosesHapusKategoriProducts()
	{
		if ($this->session->userdata('username')) {
			$id_kp = $this->uri->segment(3);
			if (!$id_kp == NULL) {
				$data['judul'] = 'Hapus Kategori Products';
				$this->Products_model->hapusKategoriProduk($id_kp);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
					Data <strong>berhasil</strong> dihapus!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('products/KategoriProductsData');
			}
			redirect('products/KategoriProductsData');
		} else {
			redirect('landing_page');
		}
	}
}
