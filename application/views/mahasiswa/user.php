<div class="container">
 <div class="row mt-3">
 <div class="col-md-6">
 <p class="h1 text-center"> ini halaman, <?= $this->session->userdata('user'); ?>
 </p>
 <p class="h4 text-center">
 <mark>
 <a href="<?php echo base_url(). 'login/logout'; ?>">Logout</a>
 </mark>
 </p>
 </div>
 </div>
</div>