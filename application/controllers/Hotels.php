<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotels extends CI_Controller
{

    function __construct()
    {

    	parent::__construct();


    }

    public function index()
    {

        $this->load->view('v_hotels.php');
    }

    // public function homeAdmin()
    // {

    //     $this->load->view('Admin/v_dashboard');
    // }
}
