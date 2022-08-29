<!-- Main content -->
            <section class="content">
               <div class="flash-data-home" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $m_aktif; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Member Aktif</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-book fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $totalbuku; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Total Buku</h3>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Buku Pinjamanku</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <?php foreach($datapinjaman as $dp): ?>
                              <?php if($dp['tgl_kembali_pinjaman'] == date('Y-m-d')) { ?>
                                 <div class="work-touchpoint">
                                    <div class="work-touchpoint-date">
                                       <span class="day"><?php echo date('d', strtotime($dp['tgl_kembali_pinjaman'])); ?></span>
                                       <span class="month"><?php echo substr(date('F', strtotime($dp['tgl_pinjam_buku'])),0,3); ?></span>
                                    </div>
                                 </div>
                                 <div class="detailswork">
                                    <a href="#" title="Klik untuk mengembalikan buku"><span class="label-danger label label-default pull-right">Kembalikan</span></a>
                                    <a href="#" title="Klik untuk mulai membaca"><?php echo $dp['judul_buku']; ?></a> <br>
                                    <p><?php echo $dp['kategori_buku']; ?> karya <?php echo $dp['penulis_buku']; ?></p>
                                 </div>
                              <?php }else { ?>
                                 <div class="work-touchpoint">
                                    <div class="work-touchpoint-date">
                                       <span class="day"><?php echo date('d', strtotime($dp['tgl_kembali_pinjaman'])); ?></span>
                                       <span class="month"><?php echo substr(date('F', strtotime($dp['tgl_pinjam_buku'])),0,3); ?></span>
                                    </div>
                                 </div>
                                 <div class="detailswork">
                                    <a href="<?php echo base_url(); ?>user/dashboard/kembalikan/<?php echo $dp['id_buku_pinjaman']; ?>" title="Klik untuk mengembalikan buku"><span class="label-warning label label-default pull-right">Kembalikan</span></a>
                                    <a href="<?php echo base_url(); ?>user/baca/detail/<?php echo $dp['url_buku']; ?>" title="Klik untuk mulai membaca"><span class="label-custom label label-default pull-right">Baca</span></a>
                                    <a href="#" title="Klik untuk mulai membaca"><?php echo $dp['judul_buku']; ?></a> <br>
                                    <p><?php echo $dp['kategori_buku']; ?> karya <?php echo $dp['penulis_buku']; ?></p>
                                 </div>
                              <?php } ?>
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
                  
               </div>
               
            </section>
            <!-- /.content -->