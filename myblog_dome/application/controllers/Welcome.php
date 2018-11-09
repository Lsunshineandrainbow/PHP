<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function _construct(){
	    parent::__construct();
	    $this->load->model('Blog_model');
    }
	public function index()
	{

		$this->load->model('Blog_model');
	    $t_blog=$this->Blog_model->get_t_log();
        $t_blog_catalog=$this->Blog_model->get_t_blog_catalog();
	    $this->load->view('index',array(
	        't_blog'=>$t_blog,
            't_blog_catalog'=>$t_blog_catalog
        ));
	}
	public function login(){
	    $this->load->view('login');
    }
    public function reg(){
        $this->load->view('reg');
    }
    public function check_email(){
	    $email = $this->input->get('email');
	    $this->load->model('Blog_model');
	    $row=$this->Blog_model->get_user_by_email($email);
	    if (count($row)>0){
	        echo 'fail';
	        }else{
	        echo 'success';
        }
    }
    public function save(){
	    echo 666;
	   $name= $this->input->get('name');
	   $email= $this->input->get('email');
	   $password= $this->input->get('pwd');
	   $gender= $this->input->get('gender');
	   $provice= $this->input->get('province');
	   $this->Blog_model->save($email,$name,$password,$gender,$provice);

    }
}