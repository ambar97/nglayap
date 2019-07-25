<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ayo_Nglayap extends CI_Controller
{

    function __construct()
    {

    	parent::__construct();
    	$this->load->model('M_web');

    }
    public function index()
    {
        $this->load->view('v_nglayap');
    }

    public function spk(){
    	$titik = $this->input->post('titik_berangkat'); //
    	$ck_wisata = $this->input->post('check_wisata');
    	$ck_hotel = $this->input->post('check_hotel');
    	$ck_mobil = $this->input->post('check_mobil');
    	$kategori_wisata = $this->input->post('kategori_wisata');
    	$bintang_hotel = $this->input->post('bintang_hotel');
    	$jumlah_penumpang = $this->input->post('jumlah_penumpang');
    	$waktu = $this->input->post('waktu'); //
    	$jarak = $this->input->post('jarak'); //
    	$harga = $this->input->post('harga'); //
    	$rating = $this->input->post('rating'); //
 		
 		$data  = array('titik' => $titik ,
 						'waktu'=> $waktu,
 						'jarak'=>$jarak,
 						'harga'=>$harga,
 						'rating'=>$rating,
 						'kategori_wisata'=>$kategori_wisata,
 						'bintang_hotel'=>$bintang_hotel,
 						'jumlah_penumpang'=>$jumlah_penumpang);

    	if (isset($_POST['submita'])) {
    		// echo $titik;echo $ck_mobil;echo $ck_hotel;echo $ck_wisata;echo $kategori_wisata;echo $bintang_hotel;echo $jumlah_penumpang;echo $waktu;echo $jarak;echo $harga;echo $rating;
    		if ($ck_wisata == 'ya' || $ck_hotel=='ya' || $ck_mobil=='ya') {
    			$data['wisata'] = $this->M_web->perhitungan('ya','ya','ya',$data);
    			$this->load->view('v_nglayapmu',$data);
    		}else{
    			echo "Pilih Salah Satu Perhitungan";
    		}
    		
    	}
    } 
}