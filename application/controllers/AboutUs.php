<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutUs extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'About Us ISUZU';
        $data['products'] = $this->Products_model->getProducts();
        $data['productsCategory'] = $this->Products_model->getProductsCategory();
        $this->load->view('templates/header', $data);
        $this->load->view('aboutus/index');
        $this->load->view('templates/footer');
    }
}
