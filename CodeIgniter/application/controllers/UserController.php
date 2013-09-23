<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class UserController extends CI_Controller
{
/*
 * Description : Index function leads to login function
 */
	public function index()
	{
            /*
     * Description : Loads home screen
     * if already logged in, loads successloginView
     */

           if($this->session->userdata('loggedIn'))
		   {
				$this->load->view('web/user/successLoginView');
           }
		   else
		   {
				$this->load->view('web/user/welcomeView');
		   }

    }
            
   /*
    * Description: Function to check whether user can log in or not.
    */
    public function login()
	{
	
		$result= $this->validateLoginForm();
		if(!$result)
			{
				

	
                $this->load->view('web/user/loginView');
            }
			else 
			{ echo "hello";
               $this->load->model('User');
			   	$loginObj = new User();
				echo "hello123";
				$loginObj->username = $this->input->post('username');
				$loginObj->password = $this->input->post('password');
				echo "here is this";
			   $loginFlag =$this->User->loginCheck($loginObj);
			   if(!$loginFlag)
			   {
						
                   $this->load->view('web/user/loginView');
               }   
			   else 
			   {    
                   $this->load->view('web/user/successLoginView');
               }  
           }
		
    }
    
	 /*
     * Description:Function for Login Validations
     * Trims inputs
     * Converts password to md5 hash
     * Returns TRUE if validations are successful
     * @return boolean
    */
    
    public function validateLoginForm()
	{
         $this->load->library('form_validation');
         $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
         $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]'); 
		if ($this->form_validation->run() == FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
    }
	public function validateRegistration()
	{
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[user.username]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|matches[passconf]|md5');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|md5');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('telephoneNumber', 'Mobile Number', 'trim|required|numeric|exact_length[10]');
		
		$this->form_validation->set_message('is_unique', 'User Name already exist, Please try something else.');
            
		if ($this->form_validation->run() == FALSE)
		{	
			return FALSE;
		}
		else
		{
			return TRUE;
		}
    }
    /*
     * Description : Logout Function
     * Destroys session
     */
    
    public function logOut()
	{
        echo "hello";
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('userController/index');
    }
	
	
	
	  /*
	 * Function to handle registration process
	 */
	public function register()
	{
		
	    $result= $this->validateLoginForm();
		if(!$result)
			{
                $this->load->view('web/user/loginView');
            }
			else 
		{  
			echo "this is bad";
			$this->load->model('User');
			
			$registerObj = new User();
			echo "hello123";
			$registerObj->username = $this->input->post('username');
			$registerObj->password = md5($this->input->post('password'));
			$registerObj->email = $this->input->post('email');
			$registerObj->phoneNumber = $this->input->post('phoneNumber');
			$result= $this->User->saveUserInfo($registerObj);
		   if($result)
			{
				$this->load->view('web/user/successView'); 
		    }
			else
			{               
				echo '<h2>Registration Unsuccessful</h2>';
				$this->load->view('web/user/registrationView');
			}		
		}
    }
}
?>
