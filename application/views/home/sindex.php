<div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">Daftar Buku</h3>
        </div>
        <!-- .... -->
        <!-- tab-furniture-->
        <div class="tab-content">
          <div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
          <div class="row">
            <?php foreach($databuku as $db): ?>
              <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="<?php echo base_url(); ?>home/detail/<?php echo $db['url_buku']; ?>"> <img src="<?php echo base_url(); ?>assets/buku/<?php echo $db['foto_buku']; ?>" alt="<?php echo $db['judul_buku']; ?>" title="<?php echo $db['kategori_buku']; ?> <?php echo $db['judul_buku']; ?>" class="img-responsive" /> <img src="<?php echo base_url(); ?>assets/buku/<?php echo $db['foto_buku']; ?>" alt="<?php echo $db['judul_buku']; ?>" title="<?php echo $db['kategori_buku']; ?> <?php echo $db['judul_buku']; ?>" class="img-responsive" /> </a>
                    <ul class="button-group">
                      <li>
                        <a href="<?php echo base_url(); ?>home/detail/<?php echo $db['url_buku']; ?>" class="addtocart-btn" title="Lihat Detail"  > Detail </a>
                      </li>
                    </ul>
                  </div>
                  <div class="caption product-detail">
                    <?php if($db['jml_bintang'] == 0) { ?>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                    <?php }elseif($db['jml_bintang'] = 1) { ?>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> </div>
                    <?php }elseif($db['jml_bintang'] = 2) { ?>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span></div>
                    <?php }elseif($db['jml_bintang'] = 3) { ?>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span></div>
                    <?php }elseif($db['jml_bintang'] = 4) { ?>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span></div>
                    <?php }else { ?>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span></div>
                    <?php } ?>
                    <h4 class="product-name"><a href="<?php echo base_url(); ?>home/detail/<?php echo $db['url_buku']; ?>" title="<?php echo $db['judul_buku']; ?>"><?php echo $db['judul_buku']; ?></a></h4>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>