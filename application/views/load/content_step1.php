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
				<h5 class="text-black h4">Contract Review PSAK 72 - STEP 1 </h5>
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
								<th style="background-image: linear-gradient(yellow, white);">SID</th>
								<th style="background-image: linear-gradient(yellow, white);">Order</th>
								<th style="background-image: linear-gradient(yellow, white);">Order + SID</th>
								<th style="background-image: linear-gradient(yellow, white);">Order Amount <br> (Nilai Tibs)</th>
								<th style="background-image: linear-gradient(yellow, white);">Contract Number</th>
								<th style="background-image: linear-gradient(yellow, white);">Costumer Account Number</th>
								<th style="background-image: linear-gradient(yellow, white);">Costumer Name</th>
								<th style="background-image: linear-gradient(yellow, white);">Segment</th>
								<th style="background-image: linear-gradient(yellow, white);">Stated contract start date</th>
								<th style="background-image: linear-gradient(yellow, white);">Stated contract end date</th>
								<th style="background-image: linear-gradient(yellow, white);">Stated contract amount</th>
								<th style="background-image: linear-gradient(yellow, white);">Is there an identified asset?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the customer has the right to control the use <br> of the identified asset for a period of
									time?</th>
								<th style="background-image: linear-gradient(yellow, white);">Contract contains a lease?</th>
								<th style="background-image: linear-gradient(yellow, white);">The parties to the contract have approved the contract <br> and are committed to perform their
									respective obligations</th>
								<th style="background-image: linear-gradient(yellow, white);">The entity can identify each party's rights regarding <br> the goods or services to be transferred
								</th>
								<th style="background-image: linear-gradient(yellow, white);">The entity can identify the payment terms <br> for the goods or services to be transferred</th>
								<th style="background-image: linear-gradient(yellow, white);">The contract has commercial substance</th>
								<th style="background-image: linear-gradient(yellow, white);">It is probable that the entity will collect substantially all <br> of the consideration to which it
									will be entitled in exchange <br> for the goods or services that will be transferred to the customer
								</th>
								<th style="background-image: linear-gradient(yellow, white);">CR</th>
								<th style="background-image: linear-gradient(yellow, white);">CR Reference Documents</th>
								<th style="background-image: linear-gradient(yellow, white);">Does termination clause <br> with substantive termination penalty <br> exist in the contract?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the customer has <br> the unilateral right to terminate the contract?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the cancellation option indicates <br> the customer has a material right?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the contract includes a notification <br> or cancellation period?</th>
								<th style="background-image: linear-gradient(yellow, white);">Notification period (in days)</th>
								<th style="background-image: linear-gradient(yellow, white);">Start</th>
								<th style="background-image: linear-gradient(yellow, white);">End</th>
								<th style="background-image: linear-gradient(yellow, white);">Contract period</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the contract provides the customer <br> the right to renew the contract (renewal option)?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the right to renew <br> the contract convey a material right?</th>
								<th style="background-image: linear-gradient(yellow, white);">Was the contract entered into at <br> or near the same time as other contracts with the same customer <br> or its related parties?</th>
								<th style="background-image: linear-gradient(yellow, white);">Do the contracts are negotiated as <br> a package with a single commercial objective?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the amount of consideration to be paid in one contract <br> depends on the price or performance of the other contract?</th>
								<th style="background-image: linear-gradient(yellow, white);">Do the goods and services promised in <br> the contracts are a single performance obligation?</th>
								<th style="background-image: linear-gradient(yellow, white);">Which contracts are combined?</th>
								<th style="background-image: linear-gradient(yellow, white);">Has the contract been modified <br> since it was entered into or commenced?</th>
								<th style="background-image: linear-gradient(yellow, white);">Did the modification increase <br> the scope of the contract due to the addition <br> of promised goods or services that are distinct and are priced at a SSP?</th>
								<th style="background-image: linear-gradient(yellow, white);">Are the remaining goods or services in <br> the modified contract distinct from those already provided?</th>
								<th style="background-image: linear-gradient(yellow, white);">Conclusion for modification treatment</th>
								<th style="background-image: linear-gradient(yellow, white);">Which contracts are modified?</th>
								<th style="background-image: linear-gradient(LightBlue, white);">Order<br>Reference</th>
								<th style="background-image: linear-gradient(LightBlue, white);">Contract<br>Reference</th>
								<th style="background-image: linear-gradient(LightBlue, white);">Department</th>
								<th style="background-image: linear-gradient(LightBlue, white);">KKP References</th>
								<th style="background-image: linear-gradient(LightBlue, white);">Tibs PY atas <br> Related Contract</th>
							</tr>
						</thead>
						<tbody>
							<?php 
										$no = 1;
										foreach($data as $d){ 
										?>

							<tr style="color:black;">


								<!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
								<td><?php echo $d['Column2']; ?></td>
								<td><?php echo $d['Column3']; ?></td>
								<td><?php echo $d['Column4']?></td>
								<td><?php echo $d['Column5']?></td>
								<td><?php $angka = $d['Column6'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format;?></td>
								<td><?php echo $d['Column7']?></td>
								<td><?php echo $d['Column8']?></td>
								<td><?php echo $d['Column9']?></td>
								<td><?php echo $d['Column10']?></td>
								<td><?php echo $d['Column11']?></td>
								<td><?php echo $d['Column12']?></td>
								<td><?php $angka = $d['Column13'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column14']?></td>
								<td ><?php echo $d['Column15']?></td>
								<td ><?php echo $d['Column16']?></td>
								<td ><?php echo $d['Column17']?></td>
								<td ><?php echo $d['Column18']?></td>
								<td ><?php echo $d['Column19']?></td>
								<td><?php echo $d['Column20']?></td>
								<td style="padding-left:250px;padding-right:250px;"><?php echo $d['Column21']?></td>
								<td><?php echo $d['Column22']?></td>
								<td><?php echo $d['Column23']?></td>
								<td ><?php echo $d['Column24']?></td>
								<td ><?php echo $d['Column25']?></td>
								<td ><?php echo $d['Column26']?></td>
								<td ><?php echo $d['Column27']?></td>
								<td><?php echo $d['Column28']?></td>
								<td><?php echo $d['Column29']?></td>
								<td><?php echo $d['Column30']?></td>
								<td><?php echo $d['Column31']?></td>
								<td ><?php echo $d['Column32']?></td>
								<td ><?php echo $d['Column33']?></td>
								<td ><?php echo $d['Column34']?></td>
								<td ><?php echo $d['Column35']?></td>
								<td ><?php echo $d['Column36']?></td>
								<td ><?php echo $d['Column37']?></td>
								<td ><?php echo $d['Column38']?></td>
								<td ><?php echo $d['Column39']?></td>
								<td ><?php echo $d['Column40']?></td>
								<td ><?php echo $d['Column41']?></td>
								<td><?php echo $d['Column42']?></td>
								<td><?php echo $d['Column43']?></td>
								<td><?php echo $d['Column44']?></td>
								<td><?php echo $d['Column45']?></td>
								<td><?php echo $d['Column46']?></td>
								<td><?php echo $d['Column47']?></td>
								<td><?php $angka_format = $d['Column48'];
								$angka_format = number_format($angka,0,",",".");
								echo $angka_format;?></td>


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

