<!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4><?php echo $title; ?></h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <!-- <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="<?php echo base_url(); ?>admin/add_buku"> <i class="fa fa-plus"></i> New Data
                                 </a>  
                              </div>
                           </div> -->
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="myTable" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>No</th>
                                       <th>Tgl</th>
                                       <th>Dari</th>
                                       <th>Email</th>
                                       <th>Telp/WA</th>
                                       <th>Jumlah</th>
                                       <th>Status</th>
                                       <th>Opsi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($buku as $bu): ?>
                                    <tr>
                                       <td><?php echo $i; ?></td>
                                       <td><?php echo date('d-m-Y H:i', strtotime($bu['subu_created'])); ?></td>
                                       <td><?php echo $bu['subu_penyumbang']; ?></td>
                                       <td><?php echo $bu['subu_email']; ?></td>
                                       <td><?php echo $bu['subu_telp']; ?></td>
                                       <td><?php echo $bu['subu_jml']; ?></td>
                                       <td><?php echo $bu['subu_status']; ?></td>
                                       <td>
                                          <?php if($bu['subu_status'] == 'Pending') { ?>
                                             <a href="<?php echo base_url(); ?>admin/konfirmasi_buku/<?php echo $bu['subu_id']; ?>" class="btn btn-add btn-sm">Konfirmasi</a>
                                          <?php }else if($bu['subu_status'] == 'Dikonfirmasi') { ?>
                                             <a href="<?php echo base_url(); ?>admin/terima_buku/<?php echo $bu['subu_id']; ?>" class="btn btn-add btn-sm">Terima Buku</a>
                                          <?php }else { ?>
                                          <?php } ?>
                                       </td>
                                    </tr>
                                    <?php $i++; ?>
                                 <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </section>
            <!-- /.content -->