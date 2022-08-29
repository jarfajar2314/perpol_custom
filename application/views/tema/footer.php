</div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="http://timkoding.com/">Tim Koding Indonesia</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="<?php echo base_url(); ?>assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="<?php echo base_url(); ?>assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Notification js -->
      <script src="<?php echo base_url(); ?>assets/sweetalert2.all.min.js" type="text/javascript"></script>

      <script>
      const flashData = $('.flash-data').data('flashdata');
        // console.log(flashData);
        if(flashData) {
          Swal.fire({
            position: 'top-end',
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
              position: 'top-end',
              title: 'Gagal !',
              text: '' + flashDataError,
              icon: 'error',
              showConfirmButton: false,
              timer: 4000
            });
          }
      </script>
      <script>
    $('.bdel').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          });
        swalWithBootstrapButtons.fire({
          position: 'top-end',
          title: 'Yakin data ini akan dihapus?',
          text: "Data tidak akan bisa dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya, Hapus!',
          cancelButtonText: 'Batal',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            document.location.href = href;
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Dibatalkan',
              '',
              'error'
            )
          }
        });
      });
  </script>
      <script src="<?php echo base_url(); ?>assets/jquery.dataTables.min.js"></script>
      <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
      </script>

      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="<?php echo base_url(); ?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="<?php echo base_url(); ?>assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="<?php echo base_url(); ?>assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="<?php echo base_url(); ?>assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });
         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();         
      </script>
     <!--  <script>
        const flashData = $('.flash-data').data('flashdata');
          // console.log(flashData);
          if(flashData) {
            Swal.fire({
              position: 'top-end',
              title: 'Berhasil !',
              text: '' + flashData,
              icon: 'success',
              showConfirmButton: false,
              timer: 2000
            });
          }
      </script> -->

      
   </body>
</html>