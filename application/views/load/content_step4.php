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
				<h5 class="text-black h4">Contract Review PSAK 72 - STEP 4 </h5>
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
								<th style="background-image: linear-gradient(yellow, white);">PO Number</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Identifier</th>
								<th style="background-image: linear-gradient(yellow, white);">PO Description</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Period</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Transaction Price</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Cost</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Stand alone selling price</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Basis to determine SSP</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Allocation all discounts</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Allocation of attributable discount</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Price Allocation <br> (after discount)</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Allocation of attributable <br> variable consideration</th>
								<th style="background-image: linear-gradient(yellow, white);">Quantity Price Allocation <br> (after discount & variable consideration)</th>
								<th style="background-image: linear-gradient(yellow, white);">Price allocation <br> per quantity</th>
								<th style="background-image: linear-gradient(yellow, white);">Control balance</th>
								<th style="background-image: linear-gradient(yellow, white);">Kesimpulan</th>
								<!--<th style="background-color:black;"></th>-->
								<!--<th>Agent Principal Conclusion</th>
								<th>CI|GL Account</th>
								<th>GL Account</th>
								<th>Recognised revenue Q3</th>
								<th>Proportion Revenue to Allocated TP</th>
								<th>Estimated cost Q3</th>
								<th>Transaction Price as Principal</th>
								<th>Price Allocation as Principal</th>
								<th>Price Allocation per Quantity as Principal</th>
								<th>Revenue as Principal Q1-Q4</th>
								<th>Diff</th>-->
							</tr>
						</thead>
						<tbody>
							<?php 
										$no = 1;
										foreach($data as $d){ 
										?>

							<tr style="color:black;">
								<!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
								<td><?php echo $d['Column4_2']; ?></td>
								<td><?php echo $d['Column4_3']; ?></td>
								<td><?php echo $d['Column4_4']?></td>
								<td><?php echo $d['Column4_5']?></td>
								<td><?php echo $d['Column4_6']?></td>
								<td><?php echo $d['Column4_7']?></td>
								<td><?php echo $d['Column4_8']?></td>
								<td><?php $angka = $d['Column4_9'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php $angka = $d['Column4_10'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php $angka = $d['Column4_11'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column4_12']?></td>
								<td><?php echo $d['Column4_13']?></td>
								<td><?php echo $d['Column4_14']?></td>
								<td><?php $angka = $d['Column4_15'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column4_16']?></td>
								<td><?php $angka = $d['Column4_17'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php $angka = $d['Column4_18'];
										  $angka_format = number_format($angka,0,",",".");
										  echo $angka_format?></td>
								<td><?php echo $d['Column4_19']?></td>
								<td><?php echo $d['Column4_20']?></td>
								<!--<td><?php /*echo $d['Column4_21']*/?></td>-->
								<!--<td style="background-color:black;"></td>-->
								<!--<td><?php echo $d['Column4_22']?></td>
								<td><?php /*echo $d['Column4_23']?></td>
								<td><?php echo $d['Column4_24']?></td>
								<td><?php echo $d['Column4_25']?></td>
								<td><?php echo $d['Column4_26']?></td>
								<td><?php echo $d['Column4_27']?></td>
								<td><?php echo $d['Column4_28']?></td>
								<td><?php echo $d['Column4_29']?></td>
								<td><?php echo $d['Column4_30']?></td>
								<td><?php echo $d['Column4_31']?></td>
								<td><?php echo $d['Column4_32']*/?></td>-->

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