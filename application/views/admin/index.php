<!-- Main content -->
            <section class="content">
               <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $totaluser; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Total Member</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
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
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-user fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $totalpeminjam; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Total Peminjam</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">11</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Running Projects</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Data Peminjam Terakhir</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <?php foreach($datapeminjam as $dp): ?>
                           <div class="work-touchpoint">
                              <div class="work-touchpoint-date">
                                 <span class="day"><?php echo date('d', strtotime($dp['tgl_pinjam_buku'])); ?></span>
                                 <span class="month"><?php echo substr(date('F', strtotime($dp['tgl_pinjam_buku'])),0,3); ?></span>
                              </div>
                           </div>
                           <div class="detailswork">
                              <span class="label-custom label label-default pull-right"><?php echo $dp['nama_user']; ?></span>
                              <a href="#" title="headings"><?php echo $dp['judul_buku']; ?></a> <br>
                              <p><?php echo $dp['kategori_buku']; ?> karya <?php echo $dp['penulis_buku']; ?></p>
                           </div>
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Member Baru</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <?php foreach($datauser as $du): ?>
                           <div class="runnigwork">
                              <?php if($du['status_user'] == 0) { ?>
                                 <span class="label-warning label label-default pull-right">Pending</span>
                                 <i class="fa fa-dot-circle-o"></i>        
                                 <a href="#"><?php echo $du['nama_user']; ?></a><br>                          
                                 <div class="progress runningprogress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="100%"></div>
                                 </div>
                              <?php }else { ?>
                                 <span class="label-success label label-default pull-right">Aktif</span>
                                 <i class="fa fa-dot-circle-o"></i>        
                                 <a href="#"><?php echo $du['nama_user']; ?></a><br>                          
                                 <div class="progress runningprogress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="100%"></div>
                                 </div>
                              <?php } ?>
                           </div>
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- /.row -->
               
            </section>
            <!-- /.content -->