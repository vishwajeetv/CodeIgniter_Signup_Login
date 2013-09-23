<?php

class registrationModel extends CI_Model{
    
    
    /*
     * Description: Validation Function
     * Trims all inputs
     * Convers password to md5 hash
     * Returns TRUE if validation is successful
     * @return boolean
     */
    public function validations(){
          $this->load->library('form_validation');
            
          
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[user.username]|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|matches[passconf]|md5');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|md5');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('telephoneNumber', 'Mobile Number', 'trim|required|numeric|exact_length[10]');
            
              
              $this->form_validation->set_message('is_unique', 'User Name already exist, Please try something else.');
            
		if ($this->form_validation->run() == FALSE){
		
			return FALSE;
		}else{
			return TRUE;
		}
    }
    
    /*
     * Description: Insert user Information
     * Returns TRUE if insertion is successful
     * @return boolean
     */
    public function insertInfo(){
        $data = array(
   'username' => $this->input->post('username') ,
   'password' => $this->input->post('password') ,
   'email' => $this->input->post('email'),
    'phoneNumber' => $this->input->post('telephoneNumber')
            
);

        $this->db->insert('user',$data);
        return TRUE;
    }
     
}


?>
