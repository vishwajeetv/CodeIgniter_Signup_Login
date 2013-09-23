<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class registrationController extends CI_Controller{
        /*
         * Index Function
         */
	public function index(){
            $this->register();
      
	}
        /*
         * Function to handle registration process
         */
        public function register(){
            $this->load->model('registrationModel');
           $result= registrationModel::validations();
           if(!$result){
               $this->load->view('registrationView');
               
           }  else {
               $result=registrationModel::insertInfo();
               if($result){
               $this->load->view('successView'); 
           }else{               echo '<h2>Registration Unsuccessful</h2>';
               $this->load->view('registrationView');
	}
    }
        }
}
?>
