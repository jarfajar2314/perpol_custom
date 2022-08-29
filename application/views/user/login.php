<div class="container">
	<h2><?php echo $title; ?></h2>
          <p>Pastikan anda telah terdaftar sebagai member</p>
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
          <div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
          <div class="form">
          	<form action="" method="post">
          		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          		<div class="form-group">
		            <label class="control-label" for="input-email">E-Mail</label>
		            <input type="text" name="email" placeholder="E-Mail" id="input-email" class="form-control" autofocus="">
		          </div>
		          <div class="form-group">
		            <label class="control-label" for="input-password">Password</label>
		            <input type="password" name="password" placeholder="Password" id="input-password" class="form-control">
		            <a href="forgetpassword.html" class="forgot">Forgotten Password</a></div>
		            <div class="form-group">
		            	<button type="submit" class="btn btn-primary"> Login</button>
		            	Belum punya akun? <a href="<?php echo base_url(); ?>user/registrasi" class="btn btn-info"> Registrasi</a>
		            </div>
          	</form>
          </div>
</div>