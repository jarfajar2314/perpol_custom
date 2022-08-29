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
                           <div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="form">
                              <form action="" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="">Nama</label>
                                       <input type="text" name="nama" class="form-control" value="<?php echo $usid['nama_user']; ?>" autofocus>
                                       <small class="text-danger"><?php echo form_error('nama'); ?></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="">Email</label>
                                       <input type="text" name="email" class="form-control" value="<?php echo $usid['email_user']; ?>">
                                       <small class="text-danger"><?php echo form_error('email'); ?></small>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="">Password</label>
                                       <input type="password" name="password" class="form-control">
                                       <small class="text-danger"><?php echo form_error('password'); ?></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="">Status</label>
                                       <select name="status" class="form-control">
                                          <?php if($usid['status_user'] == 0) { ?>
                                             <option value="0" selected="">Pending</option>
                                             <option value="1">Aktif</option>
                                          <?php }else { ?>
                                             <option value="0">Pending</option>
                                             <option value="1" selected="">Aktif</option>
                                          <?php } ?>
                                       </select>
                                       <small class="text-danger"><?php echo form_error('status'); ?></small>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo base_url(); ?>admin/data_member" class="btn btn-warning">Batal</a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </section>
            <!-- /.content -->