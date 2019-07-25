<?php $this->load->view('side/head');?>
<?php $this->load->view('side/navbar');?>

<section class="about-banner relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					AYO NGLAYAP
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url('Ayo_Nglayap') ?>"> Tours</a></p>
			</div>
		</div>
	</div>
</section>
<section class="price-area section-gap">
	<div class="container">
		<div class="col-lg-12 col-md-12 banner-right">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Tour</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Transport</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
					<div class="row">
						<div class="col-lg-12">
							<div class="single-price">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body">
												<h4 class="card-title">Rekomendasi Terbaik Wisata</h4>
												<div class="table-responsive m-t-40">
													<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
														<thead>
															<tr>
																<th>No</th>
																<th>Nama Wisata</th>
																<th>Harga</th>
																<th>Jarak</th>
																<th>Waktu</th>
																<!-- <th>Harga Tiket</th> -->
																<th>%</th>
																<th>Action</th>

															</tr>
														</thead>
														<tbody>
															<?php
															$no = 1; 
															foreach ($wisata as $wisata) {?>
																<tr>
																	<td><?php echo $no++; ?></td>
																	<td><?php echo $wisata['nama_wisata']; ?></td>
																	<td>Rp. <?php echo number_format($wisata['harga']); ?></td>
																	<td><?php echo $wisata['jarak']; ?> Km</td>
																	<td><?php echo $wisata['waktu']; ?> Menit</td>
																	<td><?php echo number_format($wisata['hasilHitung'],2) ; ?></td>
																	<td><i class="fa fa-eye"></i></td>
																</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
					<div class="row">
						<div class="col-lg-12">
							<div class="single-price">
								<h4>Rekomendasi terbaik untuk anda</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center" style="font-weight: bold;">
										<span>Nama Wisata</span>
										<span>Lokasi</span>
										<span>Jarak</span>
										<span>Waktu Tempuh</span>
										<span>Harga Tiket</span>
										<span>Perhitungan</span>
										<div>
											<span>Action</span>
										</div>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<div>
											<a href="#" class="price-btn" title="View Content"><i class="fa fa-eye"></i></a>
											<a href="#" class="price-btn" title="Pesan Sekarang"><i class="fa fa-envelope"></i></a>
										</div>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
					<div class="row">
						<div class="col-lg-12">
							<div class="single-price">
								<h4>Rekomendasi terbaik untuk anda</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center" style="font-weight: bold;">
										<span>Nama Wisata</span>
										<span>Lokasi</span>
										<span>Jarak</span>
										<span>Waktu Tempuh</span>
										<span>Harga Tiket</span>
										<span>Perhitungan</span>
										<div>
											<span>Action</span>
										</div>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<span>New York</span>
										<div>
											<a href="#" class="price-btn" title="View Content"><i class="fa fa-eye"></i></a>
											<a href="#" class="price-btn" title="Pesan Sekarang"><i class="fa fa-envelope"></i></a>
										</div>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<?php $this->load->view('side/footer');?>
<?php $this->load->view('side/js');?>
<!-- start - This is for export functionality only -->
<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
		$(document).ready(function() {
			var table = $('#example').DataTable({
				"columnDefs": [{
					"visible": false,
					"targets": 2
				}],
				"order": [
				[2, 'asc']
				],
				"displayLength": 25,
				"drawCallback": function(settings) {
					var api = this.api();
					var rows = api.rows({
						page: 'current'
					}).nodes();
					var last = null;
					api.column(2, {
						page: 'current'
					}).data().each(function(group, i) {
						if (last !== group) {
							$(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
							last = group;
						}
					});
				}
			});
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
            	var currentOrder = table.order()[0];
            	if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            		table.order([2, 'desc']).draw();
            	} else {
            		table.order([2, 'asc']).draw();
            	}
            });
        });
	});
	$('#example23').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});
</script>

