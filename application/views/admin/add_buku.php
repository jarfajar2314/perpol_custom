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
                              <form action="<?=base_url()?>/Admin/add_buku/" method="post" enctype="multipart/form-data">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="">Judul Buku</label>
                                       <input type="text" name="judul" class="form-control" value="<?php echo set_value('judul'); ?>" autofocus>
                                      
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="">Penulis</label>
                                       <input type="text" name="author" class="form-control" value="<?php echo set_value('author'); ?>">
                                       
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="">Stok Buku</label>
                                       <input type="number" min="1" name="jml_buku" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="">Jumlah Halaman</label>
                                       <input type="text" name="jml_hal" class="form-control" value="<?php echo set_value('jml_hal'); ?>">
                                       
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="">Kategori Buku</label>
                                       <select name="kat_buku" id="" class="form-control">
                                          <option value="">-Pilih-</option>
                                          <option value="Buku">Buku</option>
                                          <option value="Novel">Novel</option>
                                          <option value="Komik">Komik</option>
                                       </select>
                                       
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="">Foto Buku</label>
                                       <input type="file" name="gambar" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="">FIle Buku</label>
                                       <input accept=".pdf" type="file" name="buku" class="form-control" value="">
                                     
                                 </div>
                                 <div class="form-group">
                                    <label for="">Deskripsi Buku</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo base_url(); ?>admin/buku" class="btn btn-warning">Batal</a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </section>
            <!-- /.content -->