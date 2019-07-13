<?php $this->load->view('side/head'); ?>
<?php $this->load->view('side/navbar'); ?>


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
				<form>
					<div class="form-check col-lg-12">
						<div class="col-lg-6">
						<label for="exampleInputEmail1">Pilih Titik Awal Pemberangkatan</label>
							<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jabatan_k">
							<option disabled=""> Pilih Titik Awal</option>
					        <option value="">Pusat Kota Jember</option>
					        <option value="">Bandara</option>
					        <option value="">Stasiun Jember</option>
					        <option value="">Stasiun Tanggul</option>
					        <option value="">Stasiun Rambipuji</option>
					        <option value="">Stasiun Arjasa</option>
					        <option value="">Stasiun Ledokombo</option>
					        <option value="">Terminal Tawangalun</option>
					        <option value="">Terminal Pakusari</option>
					        <option value="">Terminal arjasa</option>
					    </select>
						</div>
					</div><hr>
				</form>
				<form>
					<div class="form-check col-lg-6">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label for="exampleInputEmail1">Wisata</label>
						<br>
						<label for="exampleInputEmail1">Kategori Wisata</label>
						<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jabatan_k">
							<option disabled=""> Pilih Titik Awal</option>
					        <option value="">Semua Wisata</option>
					        <option value="">Pantai</option>
					        <option value="">Air Terjun</option>
					        <option value="">Agrowisata</option>
					        <option value="">Pemandian</option>
					    </select>						
					</div>
					<hr>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label for="exampleInputEmail1">Hotel</label>
						<br>
						<label for="exampleInputEmail1">Bintang Hotel</label>
						<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jabatan_k">
							<option disabled=""> Pilih Bintang</option>
					        <option value="">1</option>
					        <option value="">3</option>
					        <option value="">5</option>
					    </select>
					</div><hr>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label for="exampleInputEmail1">Sewa Mobil</label>
						<br>
						<label for="exampleInputEmail1">Jumlah Penumpang</label>
						<input type="number" class="form-control" placeholder="Jumlah Penumpang" name="tempat_k" required="">
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
                                                        <input type="number" class="form-control" required="" id="recipient-name1">
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <label for="message-text" class="control-label">Jarak</label>
                                                        <input type="number" required="" class="form-control" id="recipient-name1">
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <label for="message-text" class="control-label">Harga</label>
                                                        <input type="number" class="form-control" id="recipient-name1" required="">
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <label for="message-text" class="control-label">Rating</label>
                                                        <input required="" type="number" class="form-control" id="recipient-name1">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit All</button>
                                            </div>
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