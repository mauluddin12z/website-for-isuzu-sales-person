<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Homepage ISUZU';
		$data['products'] = $this->Products_model->getProducts();
		$data['galeriFoto'] = $this->Galeri_model->getGaleriFoto();
		$data['galeriVideo'] = $this->Galeri_model->getGaleriVideo();
		$data['productsCategory'] = $this->Products_model->getProductsCategory();
		$data['productsCategoryRandom'] = $this->Products_model->getProductsCategoryRandom();
		$data['newsinfo'] = $this->Newsinfo_model->getNewsinfo();
		$this->load->view('templates/header', $data);
		$this->load->view('landing_page/index');
		$this->load->view('templates/footer');
	}
}
