<?php 

if (!$this->session->userdata('username'))
{
    header("location:/BDO/");
}
else
{
	
}

?>
<!DOCTYPE html>
<html>

<?php require('Application/views/load/head.php');?>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
<?PHP 
if ($this->session->userdata('level') == 1)
{
?>
	<?php require('Application/views/load/header.php');?>

<?php
}else {
?>
	<?php require('Application/views/load/header_not_dashboard.php');?>
<?php
}
?>
	<?php require('Application/views/load/leftbar.php');?>
	
	<?php require('Application/views/load/rightbar.php');?>

	<?php require('Application/views/load/content_reg1_carry.php');?>

	<?php require('Application/views/load/filter.php');?>
	
	<?php require('Application/views/load/footer.php');?>

	<!--<script src="?= base_url('Application/views/vendors/scripts/dashboard.js');?"></script>-->
	
	</body>

</html>
