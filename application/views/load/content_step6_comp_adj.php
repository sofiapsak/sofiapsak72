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
				<h5 class="text-black h4">Contract Review PSAK 72 - Comp Adj Per Kontrak </h5>
				<h6 class="text-black h5">PT TELKOM INDONESIA Tbk</h6>
          <div class="row">
            <div class="col s12">

			<div class="table-responsive">
			<div id="tableFixHead">
              <table id="page-length-option" class="table-bordered hover stripe multiple-select-row nowrap">
			  <br>			
			  <thead>
          <tr style="font-weight:bolder;">
										<th style="background-image: linear-gradient(yellow, white)">No</th>
                                        <th style="background-image: linear-gradient(yellow, white)">Contract Number</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Revenue Recognised</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Billing PY</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Adjustment Internal </th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Billing</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Adjustment Internal</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Tibs SORODO</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Billing Lease</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Cost <br>(for Agent Only)</br></th>
                                        <th style="background-image: linear-gradient(lightblue, white)">Total Adjustment</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Revenue Recognised</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Billing PY</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Billing</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Adjustment Internal</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Tibs SORODO</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total Billing Lease</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Total</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Remarks<br>(Net Tibs Negatif)</br></th>
							</tr>
						</thead>
						<tbody>
							<?php 
                                        $no = 1;
                                        foreach($data as $d){ 
                                        ?>

							<tr style="color:black;">
										<!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
                                        <td><?php echo $d['Column6_2'];?></td>
                                        <td><?php echo $d['Column6_3'];?></td>
                                        <td><?php echo $d['Column6_4']; ?></td>
                                        <td><?php echo $d['Column6_5']; ?></td>
                                        <td><?php echo $d['Column6_6']; ?></td>
                                        <td><?php echo $d['Column6_7']; ?></td>
                                        <td><?php echo $d['Column6_8']; ?></td>
                                        <td><?php echo $d['Column6_9']; ?></td>
                                        <td><?php echo $d['Column6_10']; ?></td>
                                        <td><?php echo $d['Column6_11']; ?></td>
                                        <td><?php echo $d['Column6_12']; ?></td>
                                        <td><?php echo $d['Column6_13']; ?></td>
                                        <!--<td><?php /*echo $d['Column5_14']; */?></td>-->
                                        <td><?php echo $d['Column6_15']; ?></td>
                                        <td><?php echo $d['Column6_16']; ?></td>
                                        <td><?php echo $d['Column6_17']; ?></td>
                                        <td><?php echo $d['Column6_18']; ?></td>
                                        <td><?php echo $d['Column6_19']; ?></td>
                                        <td><?php echo $d['Column6_20']; ?></td>
                                        <td><?php echo $d['Column6_21']; ?></td>
                                        <td><?php echo $d['Column6_22']; ?></td>
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