<?php 

if (!$this->session->userdata('level') == 1)
{
	header("location:/BDO/register");
}
else
{
	redirect('/');
}

?>
<!DOCTYPE html>
<html>

<?php require('application/views/load/head.php');?>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column" style="background-image:url(application/views/vendor/gedung.jpg);">

	<?php require('application/views/load/content_register.php');?>

	<!--<script src="?= base_url('application/views/vendors/scripts/dashboard.js');?"></script>-->
	
	</body>

</html>
