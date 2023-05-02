<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Datauser_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->query("SELECT * FROM users")->result_array();
    }

    public function getUserbyId($id_user)
    {
        return $this->db->query("SELECT * FROM users WHERE id_user = '$id_user'")->result_array();
    }

    public function tambahUser()
    {
        $primary_key = 'usr-' . md5(rand());
        if ($this->db->query("SELECT * FROM users WHERE id_user = '$primary_key'")->row() !== NULL) {
            $random_words = rand();
            $primary_key = 'usr' . md5($random_words);
        }
        $data = [
            "id_user" => $primary_key,
            "username" => htmlspecialchars($this->input->post("username", true)),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];
        $this->db->insert('users', $data);
    }

    public function editUser($id_user)
    {

        if ($this->input->post('password') == 'emptyemptyempty') {
            $data = [
                "username" => htmlspecialchars($this->input->post("username", true)),
            ];
        } else {
            $data = [
                "username" => htmlspecialchars($this->input->post("username", true)),
                "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];
        }
        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);
    }
    public function hapusUser($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('users');
    }
}
