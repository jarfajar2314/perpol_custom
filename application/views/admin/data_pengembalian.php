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
                                       <th>Nama</th>
                                       <th>Tanggal Pengembalian</th>
                                       <th>Judul Buku</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($datakembali as $dk): ?>
                                    <tr>
                                       <td><?php echo $i; ?></td>
                                       <td><?php echo $dk['nama_user']; ?></td>
                                       <td><?php echo date('d-m-Y', strtotime($dk['tgl_pengembalian'])); ?></td>
                                       <td><?php echo $dk['judul_buku']; ?></td>
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