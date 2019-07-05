<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_web extends CI_Model{

	public function select($table){
		return $this->db->get($table);
	}

	public function selectwhere($table,$data){
		return $this->db->get_where($table, $data);
	}

	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function insert2($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	function ambil_data($perpage,$offset){
		return $this->db->get("foto",$perpage,$offset)->result();

	}

	function ambil_dataMenu($perpage,$offset){
		return $this->db->get("menu",$perpage,$offset)->result();


	}

	function menuSwipoki($data){
		$this->db->select('menu.*, kategori.*, jenis.*');
		$this->db->join('kategori', 'kategori.idKategori = menu.kategori');
		$this->db->join('jenis','jenis.idJenis = kategori.jenis');
		$this->db->where('kategori.jenis',$data);
		$data1 = $this->db->get('menu');
		return $data1;
	}

	function ambil_dataRekapan($perpage,$offset){
		return $this->db->get("inStock",$perpage,$offset)->result();


	}



}


?>
