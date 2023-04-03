<!DOCTYPE html>
<html>
<head>
<title>PHPSpreadsheet in CI</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="page-login">
<main class="container mt-4">
<h2>Compile Contract Review

<span class="float-right">
<!--<a class="btn btn-success" href="<?php //echo base_url('home/multiple_spreadsheet');?>" target="_blank">Download Excel Format</a>-->

</span>
</h2>
<hr>

<?php
if($this->session->flashdata('message'))
{
echo $this->session->flashdata('message');
}
?>
<form method="post" action="../../BDO/Application/views/python.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="submit" name="submit" value="Import to Database" class="btn btn-primary">
    ->
<a class="btn btn-info" href="<?php echo base_url('home/multiple_spreadsheet');?>" target="_blank">Download Excel Data</a>
  </div>
</form>
</main><!-- Page Content -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>

</html>