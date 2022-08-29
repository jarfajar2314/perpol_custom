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
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="<?php echo base_url(); ?>admin/add_buku"> <i class="fa fa-plus"></i> New Data
                                 </a>  
                              </div>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="myTable" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>No</th>
                                       <th>ID Buku</th>
                                       <th>Judul Buku</th>
                                       <th>Penulis</th>
                                       <th>Jumlah</th>
                                       <th>Kategori</th>
                                       <th>Status</th>
                                       <th>Dibaca</th>
                                       <th>Opsi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($databuku as $db): ?>
                                       <?php $cek = $this->db->get_where('tb_pinjaman',['id_buku_pinjaman' => $db['id_buku']])->num_rows(); ?>
                                    <tr>
                                       <td><?php echo $i; ?></td>
                                       <td><?php echo $db['id_buku']; ?></td>
                                       <td><?php echo $db['judul_buku']; ?></td>
                                       <td><?php echo $db['penulis_buku']; ?></td>
                                       <td><?php echo $db['jumlah_buku']; ?></td>
                                       <td><?php echo $db['kategori_buku']; ?></td>
                                       <td>
                                          <?php if($db['jumlah_buku'] != 0) { ?>
                                             <span class="label-custom label label-info">Tersedia <?php echo $db['jumlah_buku']; ?></span>
                                          <?php }else { ?>
                                             <span class="label-custom label label-danger">Kosong</span>
                                          <?php } ?>
                                       </td>
                                       <td><?php echo $cek; ?>x</td>
                                       <td>
                                          <a href="<?php echo base_url(); ?>admin/edit_buku/<?php echo $db['id_buku']; ?>" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                          <a href="<?php echo base_url(); ?>admin/hapus_buku/<?php echo $db['id_buku']; ?>" class="btn btn-danger btn-sm bdel"><i class="fa fa-trash-o"></i> </a>
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