<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        if($this->session->userdata('spcp') != NULL)
		{
			$this->load->view('profile');
		}else{
			redirect('login');
		}
	}
}
