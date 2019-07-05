<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>"><img
                src="<?php echo base_url() ?>mastere/images/logo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if ($this->uri->segment('1') == "Home" || $this->uri->segment('1') == "") : ?>
                  <?php echo "active" ?>
                <?php endif; ?>"><a href="<?php echo base_url('Home') ?>" class="nav-link">Home</a></li>
                <li class="nav-item <?php if ($this->uri->segment('1') == "Tours") : ?>
                  <?php echo "active" ?>
                <?php endif; ?>"><a href="<?php echo base_url('Tours') ?>" class="nav-link">Tours</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
                <li class="nav-item" style=""><a href="about.html" class="nav-link" style="font-weight: bold;">Paket Kilat</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>