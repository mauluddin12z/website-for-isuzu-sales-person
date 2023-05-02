<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function auth()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/userData');
        } else {
            $data['judul'] = 'Administrator';
            $data['products'] = $this->Products_model->getProducts();
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/auth');
                $this->load->view('templates/footer');
            } else {
                $this->_login();
            }
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->query("SELECT * FROM users WHERE username = '$username'")->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/userData');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-times-circle"></i>
				<small><strong> password </strong> salah!</small>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-times-circle"></i>
			<small><strong> username </strong>atau <strong>password </strong> salah!</small>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
		<small>Kamu telah logout!</small>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
        redirect('admin/auth');
    }

    public function userData()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'User data';
            $data['user'] = $this->Datauser_model->getUser();
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/userData');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function tambahUser()
    {
        if ($this->session->userdata('username')) {
            $id_user = NULL;
            $data['judul'] = 'User data';
            $data['nama_proses'] = 'prosesTambahUser';
            $data['user'] = $this->Datauser_model->getUser();
            $data['userbyId'] = $this->Datauser_model->getUserbyId($id_user);
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/formUserData');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }
    public function editUser($id_user)
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'User data';
            $data['nama_proses'] = 'prosesEditUser';
            $data['user'] = $this->Datauser_model->getUser();
            $data['userbyId'] = $this->Datauser_model->getUserbyId($id_user);
            $data['productsCategory'] = $this->Products_model->getProductsCategory();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/formUserData');
            $this->load->view('templates/footer');
        } else {
            redirect('landing_page');
        }
    }

    public function prosesTambahUser()
    {
        if ($this->session->userdata('username')) {
            $username = $this->input->post("username", true);
            if ($this->db->query("SELECT * FROM users WHERE username = '$username'")->row()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
                Username sudah terdaftar!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/tambahUser');
            } else {
                $data['judul'] = 'Tambah User';
                $this->Datauser_model->tambahUser();
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>berhasil</strong> ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                redirect('admin/tambahUser');
            }
        } else {
            redirect('landing_page');
        }
    }
    public function prosesEditUser($id_user)
    {
        if ($this->session->userdata('username')) {
            $id_user = $this->uri->segment(3);
            if (!$id_user == NULL) {
                $data['judul'] = 'Edit User';
                $this->Datauser_model->editUser($id_user);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>berhasil</strong> diedit!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                redirect('admin/editUser/' . $id_user);
            }
            redirect('admin/editUser/' . $id_user);
        } else {
            redirect('landing_page');
        }
    }
    public function prosesHapusUser($id_user)
    {
        if ($this->session->userdata('username')) {
            $id_user = $this->uri->segment(3);
            if (!$id_user == NULL) {
                $data['judul'] = 'Hapus User';
                $this->Datauser_model->hapusUser($id_user);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            Data <strong>berhasil</strong> dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                redirect('admin/userData');
            }
            redirect('admin/userData');
        } else {
            redirect('landing_page');
        }
    }
}
