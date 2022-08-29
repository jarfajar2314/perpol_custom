<!-- Main content -->
            <section class="content">
               <div class="flash-data-home" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4><?php echo $bacabuku['judul_buku']; ?></h4>
                           </div>
                        </div>
                        <!-- <div class="panel-body"> -->
                           <!-- <div class="google-maps"> -->
                           <center>
        <h1 style="color: green"><?php echo $bacabuku['judul_buku']; ?></h1>
        <h3>Property of Perpustakaan Online</h3>
        <iframe id="pdf-js-viewer" src="<?= base_url() ?>/vendor/pdfjs/web/viewer.html?file=<?= base_url('assets/buku/pdf/' . $bacabuku['link_buku']); ?>" title="webviewer" width="100%" frameborder="0" scrolling="yes" style="display:block; width:100%; height:100vh;">
      
    </center>
    <!--                          -->
                           <!-- </div> -->
                           <!-- <iframe src=""></iframe> -->
                        <!-- </div> -->
                     </div>
                  </div>
                  
               </div>
               
            </section>
            <!-- /.content -->