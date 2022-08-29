<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="<?php echo base_url(); ?>assets/buku/<?php echo $bukuid['foto_buku']; ?>" alt="#"></div>
  <h1><?php echo $title; ?> <?php echo $bukuid['kategori_buku']; ?> <?php echo $bukuid['judul_buku']; ?></h1>
  <ul>
    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
    <li><a href=""><?php echo $bukuid['kategori_buku']; ?></a></li>
    <li><a href="#"><?php echo $bukuid['judul_buku']; ?></a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="content col-sm-12">
      <div class="row">
        <div class="col-sm-5">
          <div class="thumbnails">
            <div><a class="thumbnail fancybox" href="image/product/product8.jpg" title="<?php echo $bukuid['judul_buku']; ?>"><img src="<?php echo base_url(); ?>assets/buku/<?php echo $bukuid['foto_buku']; ?>" title="<?php echo $bukuid['judul_buku']; ?>" alt="<?php echo $bukuid['judul_buku']; ?>" /></a></div>
            
          </div>
        </div>
        <div class="col-sm-7 prodetail">
          <h1 class="productpage-title"><?php echo $bukuid['judul_buku']; ?></h1>
          <?php if($this->session->userdata('status_login') != 'sudah_login') { ?>
            <div class="rating"> Beri Bintang Untuk Buku Ini
            <?php echo "<div id='rate-$bukuid[id_buku]'>
        <input type='hidden' name='rating' id='rating' value='$bukuid[jml_bintang]'>
          <ul onMouseOut=\"resetRating($bukuid[id_buku])\">";
              for($i=1; $i<=5; $i++) {
              if($i <= $bukuid["jml_bintang"]){ $selected = "selected"; }else{ $selected = ""; }
                echo "<li class='$selected' onmouseover=\"highlightStar(this,$bukuid[id_buku])\" onmouseout=\"removeHighlight($bukuid[id_buku]);\" onClick=\"noRating()\">&#9733;</li>"; 
              }
          echo "<ul>
        </div>"; ?>
            </div>
          <?php }else { ?>
            <div class="rating"> Beri Bintang Untuk Buku Ini
            <?php echo "<div id='rate-$bukuid[id_buku]'>
        <input type='hidden' name='rating' id='rating' value='$bukuid[jml_bintang]'>
          <ul onMouseOut=\"resetRating($bukuid[id_buku])\">";
              for($i=1; $i<=5; $i++) {
              if($i <= $bukuid["jml_bintang"]){ $selected = "selected"; }else{ $selected = ""; }
                echo "<li class='$selected' onmouseover=\"highlightStar(this,$bukuid[id_buku])\" onmouseout=\"removeHighlight($bukuid[id_buku]);\" onClick=\"addRating(this,$bukuid[id_buku])\">&#9733;</li>"; 
              }
          echo "<ul>
        </div>"; ?>
            </div>
          <?php } ?>
          <hr>
          <ul class="list-unstyled productinfo-details-top">
            <li>
              <h2 class="productpage-price">Info :</h2>
            </li>
          </ul>
          <?php $cek = $this->db->get_where('tb_pinjaman',['id_buku_pinjaman' => $bukuid['id_buku']])->num_rows(); ?>
          <ul class="list-unstyled product_info">
            <li>
              <label>Penulis:</label>
              <span> <a><?php echo $bukuid['penulis_buku']; ?></a></span></li><br>
            <li>
              <label>Kategori:</label>
              <span> <?php echo $bukuid['kategori_buku']; ?></span></li><br>
              <li>
              <label>Jumlah Halaman:</label>
              <span> <?php echo $bukuid['jml_halaman']; ?> Halaman</span></li><br>
            <li>
              <label>Status Ketersediaan:</label>
              <span>
                  <?php if($bukuid['jumlah_buku'] != 0) { ?>
                                             Tersedia <?php echo $bukuid['jumlah_buku']; ?> Item lagi
                                          <?php }else { ?>
                                             Kosong
                                          <?php } ?>
              </span></li> <br>
              <li>
              <label>Dibaca:</label>
              <span> <?php echo $cek; ?>x</span></li><br>
          </ul>
          <hr>
          <p class="product-desc"> <?php echo $bukuid['deskripsi_buku']; ?></p>
          <div id="product">
            <div class="form-group">
              <?php if($bukuid['jumlah_buku'] == 0) { ?>
                <a class="btn btn-primary" onclick="nol();"> Pinjam</a>
              <?php }else { ?>
                <a href="<?php echo base_url(); ?>home/pinjam/<?php echo $bukuid['id_buku']; ?>" class="btn btn-primary"> Pinjam</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="productinfo-tab">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
          <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-description">
            <div class="cpt_product_description ">
              <div>
                <p> <?php echo $bukuid['deskripsi_buku']; ?></p>
              </div>
            </div>
            <!-- cpt_container_end --></div>
          <div class="tab-pane" id="tab-review">
            <form class="form-horizontal">
              <div id="review"></div>
              <h2>Write a review</h2>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-name">Your Name</label>
                  <input type="text" name="name" value="" id="input-name" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-review">Your Review</label>
                  <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                  <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label">Rating</label>
                  &nbsp;&nbsp;&nbsp; Bad&nbsp;
                  <input type="radio" name="rating" value="1" />
                  &nbsp;
                  <input type="radio" name="rating" value="2" />
                  &nbsp;
                  <input type="radio" name="rating" value="3" />
                  &nbsp;
                  <input type="radio" name="rating" value="4" />
                  &nbsp;
                  <input type="radio" name="rating" value="5" />
                  &nbsp;Good</div>
              </div>
              <div class="buttons clearfix">
                <div class="pull-right">
                  <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<<!-- div class="container">
    <h3 class="h3"><?php echo $title; ?> <?php echo $bukuid['kategori_buku']; ?> <?php echo $bukuid['judul_buku']; ?></h3>
    <div class="embed-responsive embed-responsive-1by1">
      <iframe class="embed-responsive-item" src="<?php echo $bukuid['link_buku']; ?>" allowfullscreen></iframe>
    </div>
</div>
<hr>
 -->