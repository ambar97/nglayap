<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{

    // function __construct()
    // {

    // 	parent::__construct();


    // }

    public function index()
    {

        $this->load->view('v_umkm');
    }

    // public function homeAdmin()
    // {

    //     $this->load->view('Admin/v_dashboard');
    // }
}
 