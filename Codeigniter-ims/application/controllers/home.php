<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
          $data['obj']=  $this->session;
         $this->load->view('header');
         $this->load->view('page',$data);
        
  
  
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('username');
     $this->session->unset_userdata('userid');
   session_destroy();
   redirect('welcome','refresh');
 }

}

?>
