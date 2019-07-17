<?php 

class Posts extends CI_Controller {
    public function index(){
     

        $data['title'] = 'Latest Products' ;

        $this->load->model('Post_model');

        $data['posts'] = $this->post_model->get_posts();


        $this->load->view('templetes/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templetes/footer');
    }




    public function view ($slug = NULL){
        $data['post'] = $this->post_model->get_posts($slug);

        if(empty($data['post']) ){
            show_404();
        }


        $data['title'] =  $data['post']['title'];

        $this->load->view('templetes/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templetes/footer');
       
    }


    public function create(){

        $data['title'] =  'Product Entry' ;
          
        $this->form_validation->set_rules('title' , 'Title' , 'required');
        $this->form_validation->set_rules('body' , 'Body' , 'required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('templetes/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templetes/footer');

        } 
        else {

            $this->post_model->create_post();
            // $this->load->view('posts/success');

           redirect('posts');
        }

       

    }

}