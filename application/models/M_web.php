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

	function perhitungan($wisata,$hotel,$mobil,$data){
		// die(var_dump($data));
		if ($wisata == 'ya') {
			$joinwisata = $this->db->join('jarak_waktu','jarak_waktu.idWisata = master_wisata.idWisata')
			->get_where('master_wisata',array('kategori'=>$data['kategori_wisata'], 'idTitikbrngkat'=>$data['titik']))->result();
			$pembagi_waktu = 0;
			$pembagi_jarak = 0;
			$pembagi_harga = 0;

			// menampung array dari array_push
			$hasil_waktu = array(); 
			$hasil_jarak = array();
			$hasil_harga = array();
			// menampung array dari array_push
			$hsl_hitung_waktu = array();
			$hsl_hitung_jarak = array();
			$hsl_hitung_harga = array();
			$hsl_hitung_rating = array();
			// menampung pembagi dari semua kriteria dengan perulangan
			foreach ($joinwisata as $value) { 
				$pembagi_waktu+= $value->waktu*$value->waktu;
				$pembagi_jarak+= (float) $value->jarak*$value->jarak;
				$pembagi_harga+= $value->harga*$value->harga;
				// $pembagi_rating+= $value->rating*$value->rating; 
			} // menampung pembagi dari semua kriteria dengan perulangan

			// perhitungan rumus ke1 TOPSIS
			foreach ($joinwisata as $value) { 
				$hitungWaktuWisata = $value->waktu/sqrt($pembagi_waktu);
				array_push($hsl_hitung_waktu, $hitungWaktuWisata);

				$hitungJarakWisata = $value->jarak/sqrt($pembagi_jarak);
				array_push($hsl_hitung_jarak, $hitungJarakWisata);

				$hitungHargaWisata = $value->harga/sqrt($pembagi_harga);
				array_push($hsl_hitung_harga, $hitungHargaWisata); 
			} // perhitungan rumus ke1 TOPSIS

			//normalisasi terbobot rumus 2
			foreach ($hsl_hitung_waktu as $value) { 
				$bobotwaktu = $data['waktu']*$value;
				array_push($hasil_waktu, $bobotwaktu);
			}
			foreach ($hsl_hitung_jarak as $value) {
				$bobotjarak = $data['jarak']*$value;
				array_push($hasil_jarak, $bobotjarak);
			}
			foreach ($hsl_hitung_harga as $value) {
				$bobotharga = $data['harga']*$value;
				array_push($hasil_harga, $bobotharga);
			}
			//normalisasi terbobot rumus 2
			die(var_dump($hasil_waktu));
		}





		if ($hotel == 'ya') {
			$joinhotel = $this->db->join('jarak_waktu','jarak_waktu.idHotel= master_hotel.idHotel')
			->join('detail_hotel','detail_hotel.idHotel=master_hotel.idHotel')
			->get_where('master_hotel',array('idTitikbrngkat'=>$data['titik']))->result();
			$pembagi_waktu_hotel = 0;
			$pembagi_jarak_hotel = 0;
			$pembagi_harga_hotel = 0;
			$pembagi_rating_hotel = 0;
			
			$hasil_waktu_hotel = array(); 
			$hasil_jarak_hotel = array();
			$hasil_harga_hotel = array();
			$hasil_rating_hotel = array();

			$hasil_waktu = array(); 
			$hasil_jarak = array();
			$hasil_harga = array();
			$hasil_rating = array();

			//Matrik normalisasi rumus 1
			foreach ($joinhotel as $value) {
				$pembagi_waktu_hotel+= $value->waktu*$value->waktu;
				$pembagi_jarak_hotel+= $value->jarak*$value->jarak;
				$pembagi_harga_hotel+= $value->harga*$value->harga;
				$pembagi_rating_hotel+= (float) $value->rating*$value->rating;
			}
			foreach ($joinhotel as $value) {
				$hitungWaktuHotel = $value->waktu/sqrt($pembagi_waktu_hotel);
				array_push($hasil_waktu_hotel, $hitungWaktuHotel);

				$hitungJarakHotel = $value->jarak/sqrt($pembagi_jarak_hotel);
				array_push($hasil_jarak_hotel, $hitungJarakHotel);

				$hitungHargaHotel = $value->harga/sqrt($pembagi_harga_hotel);
				array_push($hasil_harga_hotel, $hitungHargaHotel);

				$hitungRatingHotel = $value->rating/sqrt($pembagi_rating_hotel);
				array_push($hasil_rating_hotel, $hitungRatingHotel);
			}
			//Matrik normalisasi rumus 1
			
			//normalisasi terbobot rumus 2
			foreach ($hasil_waktu_hotel as $value) { 
				$bobotwaktu = $data['waktu']*$value;
				array_push($hasil_waktu, $bobotwaktu);
			}
			foreach ($hasil_jarak_hotel as $value) {
				$bobotjarak = $data['jarak']*$value;
				array_push($hasil_jarak, $bobotjarak);
			}
			foreach ($hasil_harga_hotel as $value) {
				$bobotharga = $data['harga']*$value;
				array_push($hasil_harga, $bobotharga);
			}
			foreach ($hasil_rating_hotel as $value) {
				$bobotrating = $data['rating']*$value;
				array_push($hasil_rating, $bobotrating);
			}
			//normalisasi terbobot rumus 2
		}





		if ($mobil == 'ya') {
			$joinmobil = $this->db->join('jarak_waktu','jarak_waktu.idSewa= master_rentcar.idRent')
			->join('detail_rentcar','detail_rentcar.idRent = master_rentcar.idRent')
			->get_where('master_rentcar',array('idTitikbrngkat'=>$data['titik']))->result();	
			$pembagi_waktu_mobil = 0;
			$pembagi_jarak_mobil = 0;
			$pembagi_harga_mobil = 0;
			$pembagi_rating_mobil = 0;
			// menampung array dari array_push
			$hasil_waktu_mobil = array(); 
			$hasil_jarak_mobil = array();
			$hasil_harga_mobil = array();
			$hasil_rating_mobil = array();
			// menampung array dari array_push

			foreach ($joinmobil as $value) {
				$pembagi_waktu_mobil+= $value->waktu*$value->waktu;
				$pembagi_jarak_mobil+= $value->jarak*$value->jarak;
				$pembagi_harga_mobil+= $value->harga*$value->harga;
				// $pembagi_rating_mobil+= $value->rating*$value->jarak;

			}
			foreach ($joinmobil as $value) {
				$hasilWaktuMobil = $value->waktu/sqrt($pembagi_waktu_mobil);
				array_push($hasil_waktu_mobil, $hasilWaktuMobil);

				$hasilJarakMobil = $value->jarak/sqrt($pembagi_jarak_mobil);
				array_push($hasil_jarak_mobil, $hasilJarakMobil);

				$hasilHargaMobil = $value->harga/sqrt($pembagi_harga_mobil);
				array_push($hasil_harga_mobil, $hasilHargaMobil);

				// $hasilRatingMobil = $value->jarak/sqrt($pembagi_harga_mobil);
				// array_push($hasil_rating_mobil, $hasilRatingMobil);
			}
			// die(var_dump($hasil_harga_mobil));
		}
	}



}


?>
