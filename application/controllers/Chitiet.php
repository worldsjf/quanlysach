<?php
class Chitiet extends CI_Controller{
    public function index(){
        $this->load->view('chitiet');
    }
    public function danhmuc(){
        // code xử lý logic liên quan đến chi tiết sách giảm giá
        // Code xử lý phải nằm trên load view
        $phanbiet = htmlspecialchars($_GET['phanbiet']);

        $this->load->view('chitiet');
    }
    public function detail(){
        $id = intval($_GET['phanbiet']);
        if($id == 0){
            $this->load->view('chitiet/toan');
        }else if($id == 1){

        }
    }
}
