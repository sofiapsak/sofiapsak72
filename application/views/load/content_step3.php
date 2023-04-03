<style>
div.dataTables_length select {
  font-size: 1.5em;
}
div.searchPlaceholder {
  font-size: 1.5em;
}
</style>
<!-- BEGIN: Page Main-->
<div id="main">
      <div class="row">

        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
  
  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12 m20">
      <div class="card">
        <div class="card-content">
				<h5 class="text-black h4">Contract Review PSAK 72 - STEP 3 </h5>
				<h6 class="text-black h5">PT TELKOM INDONESIA Tbk</h6>
          <div class="row">
            <div class="col s12">

			<div class="table-responsive">
			<div id="tableFixHead">
              <table id="page-length-option" class="table-bordered hover stripe multiple-select-row nowrap" style="berder:1px solid black;">
			  <br>			
			  <thead>
							<tr style="font-weight:bolder;">
								<th style="background-image: linear-gradient(yellow, white);">No</th>
								<th style="background-image: linear-gradient(yellow, white);">Contract Number</th>
								<th style="background-image: linear-gradient(yellow, white);">List of promised good and services, including: <br>
									1. Free goods/services <br>
									2. Cancellation option (KK 1.1) <br>
									3. Renewal option (KK 1.1) <br>
									4. Option for addional discounted goods/services <br>
									5. Warranty</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Number</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Identifier</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Description</th>
								<th style="background-image: linear-gradient(yellow, white);">Agent Principal Conclusion</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity</th>
								<th style="background-image: linear-gradient(yellow, white);">Period</th>
								<th style="background-image: linear-gradient(yellow, white);">OTC / QTY</th>
								<th style="background-image: linear-gradient(yellow, white);">Price/ QTY/ PERIOD (MRC)</th>
								<th style="background-image: linear-gradient(yellow, white);">Total Fixed Consideration</th>
								<th style="background-image: linear-gradient(yellow, white);">% of revenue sharing <br> (as determined in the contract)</th>
								<th style="background-image: linear-gradient(yellow, white);">Estimationof base for revenue sharing</th>
								<th style="background-image: linear-gradient(yellow, white);">Total Variable Consideration</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the Company applies the constraint?</th>
								<th style="background-image: linear-gradient(yellow, white);">Total Variable Consideration <br> after applying constraint</th>
								<th style="background-image: linear-gradient(yellow, white);">Reference used to estimate <br> the variable consideration</th>
								<th style="background-image: linear-gradient(yellow, white);">Estimation of usage or quantities</th>
								<th style="background-image: linear-gradient(yellow, white);">Price/ Quantity/ Unit <br> (as determined in the contract)</th>
								<th style="background-image: linear-gradient(yellow, white);">Total Variable Consideration</th>
								<th style="background-image: linear-gradient(yellow, white);">Estimation method</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the Company applies the constraint?</th>
								<th style="background-image: linear-gradient(yellow, white);">Total Variable Consideration <br> after applying constraint</th>
								<th style="background-image: linear-gradient(yellow, white);">Reference used to estimate <br> the variable consideration</th>
								<th style="background-image: linear-gradient(yellow, white);">Total Consideration / Transaction Price</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the receipt of the consideration match the timing of <br> the transfer of goods or services to the
									customer?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the timing of payments specified in <br> the contract provides the customer or the entity <br> with a
									significant benefit of financing?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the contract contains a <br> significant financing component</th>
								<th style="background-image: linear-gradient(yellow, white);">Is the period between the customer payment and <br> the transfer of goods or services to be one year or
									less?</th>
								<th style="background-image: linear-gradient(yellow, white);">Period between the customer payment and <br> the transfer of goods or services (number of periods)</th>
								<th style="background-image: linear-gradient(yellow, white);">Payment terms</th>
								<th style="background-image: linear-gradient(yellow, white);">Payment in advance or Payment in arrears</th>
								<th style="background-image: linear-gradient(yellow, white);">Discount rate at contract inception</th>
								<th style="background-image: linear-gradient(yellow, white);">Transaction Price</th>
								<th style="background-image: linear-gradient(yellow, white);">Magnitude of significant financing component</th>
							</tr>
						</thead>
						<tbody>
							<?php 
										$no = 1;
										foreach($data as $d){ 
										?>

							<tr style="color:black;">

								<!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
								<td><?php echo $d['Column3_2']; ?></td>
								<td><?php echo $d['Column3_3']; ?></td>
								<td><?php echo $d['Column3_4']?></td>
								<td><?php echo $d['Column3_5']?></td>
								<td><?php echo $d['Column3_6']?></td>
								<td><?php echo $d['Column3_7']?></td>
								<td><?php echo $d['Column3_8']?></td>
								<td><?php echo $d['Column3_9']?></td>
								<td><?php echo $d['Column3_10']?></td>
								<td><?php $angka = $d['Column3_11'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php $angka = $d['Column3_12'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php $angka = $d['Column3_13'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column3_14']?></td>
								<td><?php echo $d['Column3_15']?></td>
								<td><?php echo $d['Column3_16']?></td>
								<td><?php echo $d['Column3_17']?></td>
								<td><?php echo $d['Column3_18']?></td>
								<td><?php echo $d['Column3_19']?></td>
								<td><?php echo $d['Column3_20']?></td>
								<td><?php echo $d['Column3_21']?></td>
								<td><?php echo $d['Column3_22']?></td>
								<td><?php echo $d['Column3_23']?></td>
								<td><?php echo $d['Column3_24']?></td>
								<td><?php echo $d['Column3_25']?></td>
								<td><?php echo $d['Column3_26']?></td>
								<td><?php $angka = $d['Column3_27'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column3_28']?></td>
								<td><?php echo $d['Column3_29']?></td>
								<td><?php echo $d['Column3_30']?></td>
								<td><?php echo $d['Column3_31']?></td>
								<td><?php echo $d['Column3_32']?></td>
								<td><?php echo $d['Column3_33']?></td>
								<td><?php echo $d['Column3_34']?></td>
								<td><?php echo $d['Column3_35']?></td>
								<td><?php $angka = $d['Column3_36'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column3_37']?></td>
								</tr>
							<?php } ?>
						</tbody>
              </table>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>