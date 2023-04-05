<div class="table-wrapper">
	<div class="table-title">
		<div class="row">
			<div class="container">
				<p>
					<h2><b>Compile KK</b></h2>
					<a href="kk_step1.php" class="btn btn-info"><i class="material-icons"></i> <span><b>Step
								1</b></span></a>
					<a href="kk_step2.php" class="btn btn-info"><i class="material-icons"></i> <span><b>Step
								2</b></span></a>
					<a href="kk_step3.php" class="btn btn-info"><i class="material-icons"></i> <span><b>Step
								3</b></span></a>
					<a href="kk_step4.php" class="btn btn-info"><i class="material-icons"></i> <span><b>Step
								4</b></span></a>
					<a href="kk_step5.php" class="btn btn-info"><i class="material-icons"></i> <span><b>Step
								5</b></span></a>

					<a href="logout.php" class="btn btn-danger"><i class="material-icons"></i>
						<span><b>Logout</b></span></a>
					<br><br>
					<!--<a href="proses_gabung.php" class="btn btn-success"><i class="material-icons"></i> <span>Export To Excel</span></a>
            <a href="uploadexcel/" class="btn btn-success"><i class="material-icons"></i> <span>Import Excel To Website</span></a>-->
					<a class="btn btn-info" href="<?php echo base_url('home/multiple_spreadsheet');?>"
						target="_blank">Download Excel Data</a>

					<form method="post" action="../../BDO/application/views/python.php" enctype="multipart/form-data">

						<b><input type="submit" name="submit" value="Import To Database" class="btn btn-primary"></b>

					</form>
			</div>
		</div>
	</div>
</div>
