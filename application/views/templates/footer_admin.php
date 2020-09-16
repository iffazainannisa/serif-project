  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/imageMapResizer.min.js"></script>

  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- For Table -->
  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>
  <!-- Page Script -->
  <script>
    $(function (){
      //Initialize Select2 Elements
      $('.select2').select2()
    })
  </script>

  <script type="text/javascript">

    //Actve state 

  $(document).ready(function() {
    //You can name this function anything you like
    function activePage(){
      //When user lands on your website location.pathname is equal to "/" and in 
      //that case it will add "active" class to all links
      //Therefore we are going to remove first character "/" from the pathname
      var currentPage = location.pathname;
      var slicedCurrentPage = currentPage.slice(1);
      //This will add active class to link for current page
      $('.nav-link').removeClass('active');
      $('a[href*="' + location.pathname + '"]').closest('li').addClass('active');
      //This will add active class to link for index page when user lands on your website
      if (location.pathname == "/") {
          $('a[href*="index"]').closest('li').addClass('active');
      }
    }
    //Invoke function
    activePage();
  });
  </script>
  </script>

  </body>

  </html>