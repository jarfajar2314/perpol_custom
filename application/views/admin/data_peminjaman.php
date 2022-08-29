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
                                       <th>Tanggal Pinjam</th>
                                       <th>Tanggal Kembali</th>
                                       <th>Judul Buku</th>
                                       <th>Opsi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($datapinjam as $dp): ?>
                                    <tr>
                                       <td><?php echo $i; ?></td>
                                       <td><?php echo $dp['nama_user']; ?></td>
                                       <td><?php echo date('d-m-Y H:i:s', strtotime($dp['tgl_pinjam_buku'])); ?></td>
                                       <td><?php echo date('d-m-Y', strtotime($dp['tgl_kembali_pinjaman'])); ?></td>
                                       <th><?php echo $dp['judul_buku']; ?></th>
                                       <td>
                                          <?php if($dp['tgl_kembali_pinjaman'] == date('Y-m-d')) { ?>
                                             <a href="<?php echo base_url(); ?>admin/kembalikan/<?php echo $dp['id_buku_pinjaman']; ?>/<?php echo $dp['jumlah_buku']; ?>/<?php echo $dp['id_user']; ?>" class="btn btn-danger btn-sm" title="Klik untuk mengembalikan buku"><i class="fa fa-refresh"></i></a>
                                          <?php }else { ?>
                                             <a href="" class="btn btn-info btn-sm"><i class="fa fa-check"></i></a>
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