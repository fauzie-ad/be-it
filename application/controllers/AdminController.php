<?php 
class AdminController extends CI_Controller {

   public function templateAdmin()
   {
       $data['judul'] = "Halaman Admin";
       $this->load->view('belakang/template/header', $data);
       $this->load->view('belakang/admin/index', $data);               $this->load->view('belakang/template/footer', $data);
   } 
    
   public function kangedit() {
       $data['judul'] = "Masuk Kang Edit";

       $this->load->view('belakang/masuk_kangedit', $data);
   }

   public function otentikasi()
   {
       $this->load->model('Model_pengguna');

       $username = $this->input->post('username');
       $password = $this->input->post('password');

       $cek = $this->Model_pengguna->cek_masuk($username, $password)->num_rows();
       $data = $this->Model_pengguna->cek_masuk($username, $password)->row();
       if ($cek > 0) {
           if ($data->level === "0") {
               redirect('admin/index');
               
           } elseif ($data->level === "1") {
               $this->load->view('belakang/template/header', $data);$this->load->view('belakang/penulis/index', $data);
               $this->load->view('belakang/template/footer', $data);
           }
       } else {
           $this->session->set_flashdata('pesan', 'Maaf, ada yang salah tuh, coba isi yang benar yaaah!!!');
           redirect('kang_edit');
       }
   }
}
?>