<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?> - Perpustakaan Online</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Perpustakaan Online" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?php echo base_url(); ?>assets_home/image/favicon.png" rel="icon" type="image/png" >
<link href="<?php echo base_url(); ?>assets_home/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="<?php echo base_url(); ?>assets_home/javascript/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
<link href="<?php echo base_url(); ?>assets_home/css/stylesheet.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets_home/css/responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets_home/javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="<?php echo base_url(); ?>assets_home/javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<style>
  .highlight, .selected { color:#F4B30A;font-size: 20px; }
  ul{ margin:0; padding:0; }
li{ cursor:pointer; list-style-type: none; display: inline-block; color: #F0F0F0; text-shadow: 0 0 1px #666666;}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js" ></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/jquery-2.1.1.min.js" ></script> -->
<script>
  function highlightStar(obj,id) {
    removeHighlight(id);    
    $('#rate-'+id+' li').each(function(index) {
      $(this).addClass('highlight');
      if(index == $('#rate-'+id+' li').index(obj)) {
        return false; 
      }
    });
  }

  // event yang terjadi pada saat kita mengarahkan kursor kita ke sebuah object
  function removeHighlight(id) {
    $('#rate-'+id+' li').removeClass('selected');
    $('#rate-'+id+' li').removeClass('highlight');
  }

  function addRating(obj,id) {
    $('#rate-'+id+' li').each(function(index) {
      $(this).addClass('selected');
      $('#rate-'+id+' #rating').val((index+1));
      if(index == $('#rate-'+id+' li').index(obj)) {
        return false; 
      }
    });
    $.ajax({
    url: "<?php echo base_url(); ?>home/tambah_rating",
    data:'id='+id+'&rating='+$('#rate-'+id+' #rating').val(),
    type: "POST"
    });
  }

  function resetRating(id) {
    if($('#rate-'+id+' #rating').val() != 0) {
      $('#rate-'+id+' li').each(function(index) {
        $(this).addClass('selected');
        if((index+1) == $('#rate-'+id+' #rating').val()) {
          return false; 
        }
      });
    }
  } 
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/template_js/jstree.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/template_js/template.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/common.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/global.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets_home/javascript/owl-carousel/owl.carousel.min.js" ></script>
</head>
<body class="index">
<div class="preloader loader" style="display: block;"> <img src="<?php echo base_url(); ?>assets_home/image/loader.gif"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            <div class="wel-come-msg"> Selamat datang di perpustakaan online! </div>
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <?php if($this->session->userdata('status_login') == 'sudah_login') { ?>
                  <li class="dropdown"><a href="#" title="<?php echo $this->session->userdata('nama'); ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $this->session->userdata('nama'); ?></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="<?php echo base_url(); ?>user/dashboard">Dashboard</a></li>
                      <li><a href="<?php echo base_url(); ?>user/login/logout">Logout</a></li>
                    </ul>
                  </li>
                <?php }else { ?>
                  <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="<?php echo base_url(); ?>user/registrasi">Register</a></li>
                      <li><a href="<?php echo base_url(); ?>user/login">Login</a></li>
                    </ul>
                  </li>
                <?php } ?>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-3 header-left">
        <div id="logo"> <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets_home/image/logo.png" title="Perpustakaan Online" alt="Perpustakaan Online" class="img-responsive" /></a> </div>
      </div>
      <div class="col-sm-9 col-xs-9 header-right">
        <div id="search" class="input-group">
          <form action="<?= base_url('Home/index') ?>" method="POST">
          <input type="text" name="keyword" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
          <span class="input-group-btn">
          <button type="submit" class="btn btn-default btn-lg"><span>Search</span></button>
          </span> </div>
                </form>
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span>List Pinjaman</span><br>
          <?php echo $t_pinjaman; ?> Item</span></button>
          <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
              <table class="table table-striped">
                <tbody>
                  <?php foreach($datapinjaman as $dp): ?>
                  <tr>
                    <td class="text-left"><a href=""><?php echo $dp['judul_buku']; ?></a></td>
                    <td class="text-center"><a href="<?php echo base_url(); ?>home/kembalikan/<?php echo $dp['id_buku_pinjaman']; ?>" class="btn btn-danger btn-xs" title="Kembalikan" type="button"><i class="fa fa-share"></i></a></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<nav id="menu" class="navbar">
  <div class="nav-inner">
    <div class="navbar-header"><span id="category" class="visible-xs">Menu</span>
      <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse">
      <ul class="main-navigation">
        <li><a href="<?php echo base_url(); ?>"   class="parent"  >Home</a> </li>
        
        
      </ul>
    </div>
  </div>
</nav>