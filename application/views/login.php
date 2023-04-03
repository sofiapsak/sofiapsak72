<?php 

if (!$this->session->userdata('username'))
{
 
}
else
{
	redirect('home');
}

?>
<!DOCTYPE html>
<html>

<?php require('load/head.php');?>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column" style="background-image:url(application/views/vendor/gedung.jpg);">

	<?php require('load/content_login.php');?>

	<!--<script src="?= base_url('Application/views/vendors/scripts/dashboard.js');?"></script>-->
	
	</body>

</html>
