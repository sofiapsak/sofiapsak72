<!-- BEGIN: Footer-->

<footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span><!-- --><a href="#" target="_blank"><!----></a> <!----></span><span class="right hide-on-small-only">&copy; Copyright -<a href="#"> BDO INDONESIA</a></span></div>
      </div>
    </footer>
  
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?= base_url('app-assets/js/vendors.min.js');?>"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= base_url('app-assets/vendors/sparkline/jquery.sparkline.min.js');?>"></script>
    <script src="<?= base_url('app-assets/vendors/chartjs/chart.min.js');?>"></script>
    <script src="<?= base_url('app-assets/vendors/chartist-js/chartist.min.js');?>"></script>
    
    <script src="<?= base_url('app-assets/vendors/data-tables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?= base_url('app-assets/vendors/data-tables/js/dataTables.select.min.js');?>"></script>

    <script src="<?= base_url('app-assets/vendors/sweetalert/sweetalert.min.js');?>"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?= base_url('app-assets/js/plugins.min.js');?>"></script>
    <script src="<?= base_url('app-assets/js/search.min.js');?>"></script>
    <script src="<?= base_url('app-assets/js/custom/custom-script.min.js');?>"></script>
    <script src="<?= base_url('app-assets/js/scripts/customizer.min.js');?>"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= base_url('app-assets/js/scripts/data-tables.min.js');?>"></script>
    <script src="<?= base_url('app-assets/js/scripts/app-file-manager.min.js');?>"></script>

    <!-- END PAGE LEVEL JS-->
    <script>
          document.querySelector('#download_data').addEventListener('submit', function(e) {
            var form = this;
            
            e.preventDefault();
            
            swal({
                title: "Confirmation",
                text: "Are you sure you want to download the compilation file of all working papers?",
                icon: "warning",
                buttons: [
                  'No, cancel it!',
                  'Yes, I am sure!'
                ],
                dangerMode: false,
              }).then(function(isConfirm) {
                if (isConfirm) {
                  swal({
                    title: 'Success!',
                    text: 'You have successfully downloaded the file, Click Ok and please wait for loading to finish',
                    icon: 'success'
                  }).then(function() {
                    form.submit();
                  });
                } else {
                  swal("Cancelled", "Your download has been canceled", "error");
                }
              });
          });
      </script>