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

<?php require('application/views/load/head.php');?>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
<?PHP 
if ($this->session->userdata('level') == 1)
{
?>
	<?php require('application/views/load/header.php');?>

<?php
}else {
?>
	<?php require('application/views/load/header_not_dashboard.php');?>
<?php
}
?>
	<?php require('application/views/load/leftbar_step6.php');?>

	<?php require('application/views/load/rightbar.php');?>

	<?php require('application/views/load/content_step6_comp_adj.php');?>

	<?php require('application/views/load/footer.php');?>

</body>

</html>
