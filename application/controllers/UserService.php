<?php
/**
 * Created by PhpStorm.
 * User: Vishwajeet
 * Date: 20/7/14
 * Time: 12:39 AM
 */

require(APPPATH.'/libraries/REST_Controller.php');
//require('index.php/libraries/REST_Controller.php');

class UserService extends REST_Controller {

    function userLogin_post()
    {
        $this->load->model('User');
        $loginObj = new User();

        $loginObj->username = $this->input->post('username');
        $loginObj->password = $this->input->post('password');

        $loginFlag =$this->User->loginCheckService($loginObj);
        if(!$loginFlag)
        {
            $this->response(array('status' => 'failed'));
        }
        else
        {
            $this->response(array('status' => 'success'));
        }
    }
} 