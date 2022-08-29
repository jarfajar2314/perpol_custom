<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <link href="<?php echo base_url(); ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="<?php echo base_url(); ?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" id="loginForm" novalidate>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input type="text" title="Please enter you email" required="" value="admin@gmail.com" name="email" id="email" class="form-control">
                                <small class="text-danger"><?php echo form_error('email') ?></small>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" value="admin" name="password" id="password" class="form-control">
                                <small class="text-danger"><?php echo form_error('password') ?></small>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-add">Login</button>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Notification js -->
      <script src="<?php echo base_url(); ?>assets/sweetalert2.all.min.js" type="text/javascript"></script>

      <script>
      const flashData = $('.flash-data').data('flashdata');
        // console.log(flashData);
        if(flashData) {
          Swal.fire({
            position: 'top-end',
            title: 'Berhasil !',
            text: '' + flashData,
            icon: 'success',
            showConfirmButton: false,
            timer: 4000
          });
        }
    </script>

      <script>
        const flashDataError = $('.flash-data-error').data('flashdata');
          // console.log(flashData);
          if(flashDataError) {
            Swal.fire({
              position: 'top-end',
              title: 'Gagal !',
              text: '' + flashDataError,
              icon: 'error',
              showConfirmButton: false,
              timer: 4000
            });
          }
      </script>
    </body>
</html>