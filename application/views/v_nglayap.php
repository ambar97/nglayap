<?php $this->load->view('side/head'); ?>
<?php $this->load->view('side/navbar'); ?>

<div id="modal" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Password Hint</h4>
						<i>Password Hint ini berfungsi Apabila anda mengalami lupa password maka anda harus menggunakan jawaban dari pertanyaan ini.</i>
					</div>
					<div class="modal-body">
						<p>Siapakah nama Ibu Anda ?  </p>
						<input type="text" name="hint" class="form-control" required="">

					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
						<button type="Submit" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Welcome</h4>
			</div>
			<div class="modal-body">
				<p><img src="http://erllang.ga/logo.png"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<section class="about-banner relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					TOURS
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url('Tours') ?>"> Tours</a></p>
			</div>
		</div>
	</div>
</section>
<section class="price-area section-gap container">
	<div class="row">
		<div class="col-lg-12">
			<div class="single-price">
				<h4>Lengkapi Form Berikut</h4>
				<form method="POST" action="<?php echo base_url('Ayo_Nglayap/spk') ?>">
					<div class="form-check col-lg-12">
						<div class="col-lg-6">
							<label for="exampleInputEmail1">Pilih Titik Awal Pemberangkatan</label>
							<select class="form-control custom-select" data-placeholder="Choose a Category" name="titik_berangkat" required>
								<!-- <option disabled=""> Pilih Titik Awal</option> -->
								<option > Pilih Titik Awal</option>
								<option value="1">Pusat Kota Jember</option>
								<option value="2">Bandara</option>
								<option value="4">Stasiun Jember</option>
								<option value="8">Stasiun Tanggul</option>
								<option value="7">Stasiun Rambipuji</option>
								<option value="5">Stasiun Arjasa</option>
								<option value="6">Stasiun Ledokombo</option>
								<option value="9">Terminal Tawangalun</option>
								<option value="10">Terminal Pakusari</option>
								<option value="11">Terminal arjasa</option>
							</select>
						</div>
					</div><hr>
					<div class="form-check col-lg-6">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="check_wisata" value="ya">
						<label for="exampleInputEmail1">Wisata</label>
						<br>
						<label for="exampleInputEmail1">Kategori Wisata</label>
						<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="kategori_wisata">
							<option disabled=""> Pilih Kategori Wisata</option>
							<option>Pilih kategori Wisata</option>
							<option value="null">Semua Wisata</option>
							<option value="Pantai">Pantai</option>
							<option value="Air Terjun">Air Terjun</option>
							<option value="Agrowisata">Agrowisata</option>
							<option value="Pemandian">Pemandian</option>
						</select>						
					</div>
					<hr>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="check_hotel" value="ya">
						<label for="exampleInputEmail1">Hotel</label>
						<!-- <br>
						<label for="exampleInputEmail1">Bintang Hotel</label>
						<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="bintang_hotel">
							<option disabled=""> Pilih Bintang</option>
							<option value="">1</option>
							<option value="">3</option>
							<option value="">5</option>
						</select> -->
					</div><hr>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="check_mobil" value="ya">
						<label for="exampleInputEmail1">Sewa Mobil</label>
						<br>
						<!-- <label for="exampleInputEmail1">Jumlah Penumpang</label>
						<input type="number" class="form-control" placeholder="Jumlah Penumpang" name="jumlah_penumpang" required=""> -->
					</div><hr>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="float: right;">Submit</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel1">masukkan Bobot Kriteria</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="container">
									<p>Masukkan angka dari 1-5, sesuai dengan preferensi kebutuhan anda.</p>
								</div>
								<div class="modal-body col-lg-12 row">
									<form>
										<div class="form-group col-lg-3">
											<label for="recipient-name" class="control-label">Waktu</label>
											<input type="number" class="form-control" required="" max="5" min="1" name="waktu">
										</div>
										<div class="form-group col-lg-3">
											<label for="message-text" class="control-label">Jarak</label>
											<input type="number" required="" class="form-control" max="5" min="1" name="jarak">
										</div>
										<div class="form-group col-lg-3">
											<label for="message-text" class="control-label">Harga</label>
											<input type="number" class="form-control" name="harga" max="5" min="1" required="">
										</div>
										<div class="form-group col-lg-3">
											<label for="message-text" class="control-label">Rating</label>
											<input required="" type="number" class="form-control" name="rating" max="5" min="1">
										</div>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" name="submita">Submit All</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('side/footer');?>
<script src="<?php echo base_url() ?>master/js/custom.min.js"></script>
<?php $this->load->view('side/js');?>
<script type="text/javascript">
	$(document).ready(function() {
			$('#modal').modal('show');
		}
</script>