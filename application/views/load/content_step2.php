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
				<h5 class="text-black h4">Contract Review PSAK 72 - STEP 2 </h5>
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
								<th style="background-image: linear-gradient(yellow, white);">No Urut <br>Contract</br></th>
								<th style="background-image: linear-gradient(yellow, white);">List of promised good and services, including: <br>
									1. Free goods/services <br>
									2. Cancellation option (KK 1.1) <br>
									3. Renewal option (KK 1.1) <br>
									4. Option for addional discounted goods/services <br>
									5. Warranty</th>
								<th style="background-image: linear-gradient(yellow, white);">Lease component?</th>
								<th style="background-image: linear-gradient(yellow, white);">The promised good or service is capable <br> of being distinct by providing a benefit <br> to the
									customer either on its own or together <br> with other readily available resources</th>
								<th style="background-image: linear-gradient(yellow, white);">The entity provides a significant integrated service <br> (bundle of goods or services in the contract
									that represent <br> the combined output or outputs for which the customer has contracted)</th>
								<th style="background-image: linear-gradient(yellow, white);">One or more of the goods or services significantly modifies or customises, <br> or are significantly
									modified or customised by, <br> one or more of the other goods or services promised in the contract.</th>
								<th style="background-image: linear-gradient(yellow, white);">The goods or services are highly interdependent <br> or highly interrelated (each of the goods or
									services is significantly affected <br> by one or more of the other goods or services in the contract)</th>
								<th style="background-image: linear-gradient(yellow, white);">Conclusion</th>
								<th style="background-image: linear-gradient(yellow, white);">Separate PO <br> / Not a separate PO</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the option convey a material right?</th>
								<th style="background-image: linear-gradient(yellow, white);">PO/Not a PO</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the customer have the option <br> to purchase the warranty separately?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the promised warrantyprovide the customer <br> with a service in addition to the assurance that <br> the
									product complied agreed-upon specifications?</th>
								<th style="background-image: linear-gradient(yellow, white);">Service warranty (PO) <br> / Assurance warranty (Not a PO)</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Number</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Identifier</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Description</th>
								<th style="background-image: linear-gradient(yellow, white);">Is another party involved in providing goods or services to the customer?</th>
								<th style="background-image: linear-gradient(yellow, white);">Has the Company obtain the control of the specified good <br> or service before it is transferred to the
									customer?</th>
								<th style="background-image: linear-gradient(yellow, white);">Is the Company primarily responsible for fulfilling <br> the promise to provide the goods or services to
									the customer?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the Company have inventory risk?</th>
								<th style="background-image: linear-gradient(yellow, white);">Does the Company have discretion in establishing price?</th>
								<th style="background-image: linear-gradient(yellow, white);">Conclusion</th>
								<th style="background-image: linear-gradient(yellow, white);">Vendor</th>
								<th style="background-image: linear-gradient(yellow, white);">KL Number</th>
								<th style="background-image: linear-gradient(yellow, white);">KL Date</th>
								<th style="background-image: linear-gradient(LightBlue, white);">WO number</th>
								<th style="background-image: linear-gradient(LightBlue, white);">WO Date</th>
							</tr>
						</thead>
						<tbody>
							<?php 
										$no = 1;
										foreach($data as $d){ 
										?>

							<tr style="color:black;">

								<!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
								<td><?php echo $d['Column2_2']; ?></td>
								<td><?php echo $d['Column2_3']; ?></td>
								<td><?php echo $d['Column2_4']?></td>
								<td><?php echo $d['Column2_5']?></td>
								<td><?php echo $d['Column2_6']?></td>
								<td><?php echo $d['Column2_7']?></td>
								<td><?php echo $d['Column2_8']?></td>
								<td><?php echo $d['Column2_9']?></td>
								<td><?php echo $d['Column2_10']?></td>
								<td><?php echo $d['Column2_11']?></td>
								<td><?php echo $d['Column2_12']?></td>
								<td><?php echo $d['Column2_13']?></td>
								<td><?php echo $d['Column2_14']?></td>
								<td><?php echo $d['Column2_15']?></td>
								<td><?php echo $d['Column2_16']?></td>
								<td><?php echo $d['Column2_17']?></td>
								<td><?php echo $d['Column2_18']?></td>
								<td><?php echo $d['Column2_19']?></td>
								<td><?php echo $d['Column2_20']?></td>
								<td><?php echo $d['Column2_21']?></td>
								<td><?php echo $d['Column2_22']?></td>
								<td><?php echo $d['Column2_23']?></td>
								<td><?php echo $d['Column2_24']?></td>
								<td><?php echo $d['Column2_25']?></td>
								<td><?php echo $d['Column2_26']?></td>
								<td><?php echo $d['Column2_27']?></td>
								<td><?php echo $d['Column2_28']?></td>
								<td><?php echo $d['Column2_29']?></td>
								<td><?php echo $d['Column2_30']?></td>

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