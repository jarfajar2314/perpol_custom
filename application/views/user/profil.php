<!-- Main content -->
            <section class="content">
               <div class="flash-data-error" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
               <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <!-- <div class="card-header-headshot"></div> -->
                           <img src="<?php echo base_url(); ?>assets/dist/img/<?php echo $this->session->userdata('foto'); ?>" alt="..." width="75" height="75" class="img-rounded">
                        </div>
                        <div class="card-content">
                           <div class="card-content-member text-center">
                              <h4 class="mt-3"><?php echo $this->session->userdata('nama'); ?></h4>
                           </div>
                           <div class="card-content-languages">
                              <div class="card-content-languages-group">
                                 <div>
                                    <h4>Speaks:</h4>
                                 </div>
                                 <div>
                                    <ul>
                                       <li>
                                          English
                                          <div class="fluency fluency-4"></div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="card-content-languages-group">
                                 <div>
                                    <h4>Learning:</h4>
                                 </div>
                                 <div>
                                    <ul>
                                       <li>Spanish,</li>
                                       <li>Russian,</li>
                                       <li>German</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="card-content-summary">
                              <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="card-footer-stats">
                              <div>
                                 <p>PROJECTS:</p>
                                 <i class="fa fa-users"></i><span>241</span>
                              </div>
                              <div>
                                 <p>MESSAGES:</p>
                                 <i class="fa fa-coffee"></i><span>350</span>
                              </div>
                              <div>
                                 <p>Last online</p>
                                 <span class="stats-small">3 days ago</span>
                              </div>
                           </div>
                           <div class="card-footer-message">
                              <h4><i class="fa fa-comments"></i> Message me</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-8">
                     <div class="row">
                        <div class="col-sm-12 col-md-6">
                           <div class="rating-block">
                              <h4>Average user rating</h4>
                              <h2 class="m-b-20">4.3 <small>/ 5</small></h2>
                              <button type="button" class="btn btn-rating btn-sm" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              </button>
                              <button type="button" class="btn btn-rating btn-sm" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              </button>
                              <button type="button" class="btn btn-rating btn-sm" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              </button>
                              <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              </button>
                              <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              </button>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                           <h4 class="m-t-0">Rating breakdown</h4>
                           <div class="pull-left">
                              <div class="review-number">
                                 <div>5 <span class="glyphicon glyphicon-star"></span></div>
                              </div>
                              <div class="review-progress">
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 90%">
                                       <span class="sr-only">90% Complete (danger)</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="progress-number">1</div>
                           </div>
                           <div class="pull-left">
                              <div class="review-number">
                                 <div>4 <span class="glyphicon glyphicon-star"></span></div>
                              </div>
                              <div class="review-progress">
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                       <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="progress-number">1</div>
                           </div>
                           <div class="pull-left">
                              <div class="review-number">
                                 <div>3 <span class="glyphicon glyphicon-star"></span></div>
                              </div>
                              <div class="review-progress">
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 70%">
                                       <span class="sr-only">70% Complete (danger)</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="progress-number">0</div>
                           </div>
                           <div class="pull-left">
                              <div class="review-number">
                                 <div>2 <span class="glyphicon glyphicon-star"></span></div>
                              </div>
                              <div class="review-progress">
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                       <span class="sr-only">60% Complete (danger)</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="progress-number">0</div>
                           </div>
                           <div class="pull-left">
                              <div class="review-number">
                                 <div>1 <span class="glyphicon glyphicon-star"></span></div>
                              </div>
                              <div class="review-progress">
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-violet progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 50%">
                                       <span class="sr-only">50% Complete (danger)</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="progress-number">0</div>
                           </div>
                        </div>
                     </div>
                     <div class="review-block">
                        <h3>Update Profil</h3>
                        <div class="form">
                           <form action="" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                              <div class="form-group">
                                 <label for="">Nama Lengkap</label>
                                 <input type="text" name="nama" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>">
                                 <small class="text-danger"><?php echo form_error('nama'); ?></small>
                              </div>
                              <div class="form-group">
                                 <label for="">Foto Profil</label>
                                 <input type="file" name="gambar" class="form-control">
                                 <input type="hidden" name="gambar_old" value="<?php echo $this->session->userdata('foto'); ?>">
                              </div>
                              <div class="form-group">
                                 <label for="">Konfirmasi Password</label>
                                 <input type="text" name="plama" class="form-control">
                                 <small class="text-danger"><?php echo form_error('plama'); ?></small>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-info">Simpan</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->