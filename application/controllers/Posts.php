<?php 

class Posts extends CI_Controller {
    public function index(){
     

        $data['title'] = 'Latest Products' ;
        $this->load->view('templetes/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templetes/footer');
    }

}