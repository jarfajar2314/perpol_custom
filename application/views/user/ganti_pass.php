<!-- Main content -->
            <section class="content">
               <div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
               <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4><?php echo $title; ?></h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="form">
                              <form action="" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                 <div class="form-group">
                                    <label for="">Password Baru</label>
                                    <input type="password" name="pbaru" class="form-control" autofocus="">
                                    <small class="text-danger"><?php echo form_error('pbaru'); ?></small>
                                 </div>
                                 <div class="form-group">
                                    <label for="">Konfirmasi Password Lama</label>
                                    <input type="password" name="plama" class="form-control">
                                    <small class="text-danger"><?php echo form_error('plama'); ?></small>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
               
            </section>
            <!-- /.content -->