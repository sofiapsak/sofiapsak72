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
	<?php require('Application/views/load/leftbar_step7.php');?>

	<?php require('Application/views/load/rightbar.php');?>

	<?php require('Application/views/load/content_step7_comp_gl.php');?>

	<?php require('Application/views/load/footer.php');?>

</body>

</html>
