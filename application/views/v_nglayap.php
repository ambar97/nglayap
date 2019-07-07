<?php $this->load->view('side/head'); ?>
<?php $this->load->view('side/navbar'); ?>

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

<?php $this->load->view('side/footer');?>
<?php $this->load->view('side/js');?>
