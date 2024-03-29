<?php 

class Post_model extends CI_Model {
    public function __construct(){
      $this->load->database();


    }

    public function get_posts($slug = False){

        if($slug === False){
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts' , array('slug' => $slug));

        return $query->row_array();
        
    }

    public function create_post(){

         
        $slug =  url_title($this->input->post('title'));
        $title = $this->input->post('title' );
        $body =  $this->input->post('body');

        

        $data =  array (

            'title' => $title ,
            'slug'  => $slug ,
            'body'  => $body

        );
       
        return $this->db->insert('posts' , $data);

        
    }

    public function delete_post($id){


        $this->db->where('id' , $id);
        $this->db->delete('posts');
      
        return true ;
    }

}