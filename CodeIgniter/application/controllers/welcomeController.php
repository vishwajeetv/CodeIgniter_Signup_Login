<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class welcomeController extends CI_Controller{

    /*
     * Description : Loads home screen
     * if already logged in, loads successloginView
     */
	public function index(){
	//echo $this->session->userdata('loggedIn');
           if($this->session->userdata('loggedIn')){
               $this->load->view('successLoginView');
           }else{
            
            $this->load->view('welcomeView');
      
	}
       

    }
    
   
}

?>
