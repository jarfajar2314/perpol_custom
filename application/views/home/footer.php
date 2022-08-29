</div>
<footer>
  <div class="footer-bottom">
    <div id="bottom-footer">
      <div class="copyright"> Copyright - <a class="yourstore" href="http://www.timkoding.com/"> Tim Koding Indonesia &copy; <?= date('Y') ?> </a></div>
      <div class="footer-bottom-cms">
        <div class="footer-payment">
          <ul>
            <li class="mastero"><a href="#"><img alt="" src="<?php echo base_url(); ?>assets_home/image/payment/mastero.jpg"></a></li>
            <li class="visa"><a href="#"><img alt="" src="<?php echo base_url(); ?>assets_home/image/payment/visa.jpg"></a></li>
            <li class="currus"><a href="#"><img alt="" src="<?php echo base_url(); ?>assets_home/image/payment/currus.jpg"></a></li>
            <li class="discover"><a href="#"><img alt="" src="<?php echo base_url(); ?>assets_home/image/payment/discover.jpg"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <a id="scrollup">Scroll</a> </footer>
<script src="<?php echo base_url(); ?>assets_home/javascript/jquery.parallax.js"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>
<script src="<?php echo base_url(); ?>assets/sweetalert2.all.min.js" type="text/javascript"></script>
<script>
      const flashData = $('.flash-data').data('flashdata');
        // console.log(flashData);
        if(flashData) {
          Swal.fire({
            position: 'center',
            title: 'Berhasil !',
            text: '' + flashData,
            icon: 'success',
            showConfirmButton: false,
            timer: 4000
          });
        }
    </script>

      <script>
        const flashDataError = $('.flash-data-error').data('flashdata');
          // console.log(flashData);
          if(flashDataError) {
            Swal.fire({
              position: 'center',
              title: 'Gagal !',
              text: '' + flashDataError,
              icon: 'error',
              showConfirmButton: false,
              timer: 5000
            });
          }
      </script>
      <script>
        function nol() {
          Swal.fire(
            'Info!',
            'Buku tidak tersedia!',
            'info',
          )
        }
      </script>
      <script>
        function noRating() {
          Swal.fire(
            'Info!',
            'Silahkan login untuk memberi bintang !',
            'info',
          )
        }
      </script>
      
</body>
</html>