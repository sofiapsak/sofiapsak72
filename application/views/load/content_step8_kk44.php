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
				<h5 class="text-black h4">Contract Review PSAK 72 - KK 4.4 </h5>
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
                                        <th style="background-image: linear-gradient(yellow, white)">Customer Name</th>
                                        <th style="background-image: linear-gradient(yellow, white)">Contract Start Date</th>
                                        <th style="background-image: linear-gradient(yellow, white)">Contract End Date</th>
                                        <th style="background-image: linear-gradient(yellow, white)">BP Number</th>
                                        <th style="background-image: linear-gradient(yellow, white)">BP Number (From Telkom)</th>
                                        <th style="background-image: linear-gradient(yellow, white)">UBIS</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Beginning Balance <br>1 Jan 2022</br></th>
                                        <th style="background-image: linear-gradient(wheat, white)">Reversal Accrue 2021</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Catch up Adjustment Review CACL</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Adjustment CACL<br>Q3 2022</br></th>
                                        <th style="background-image: linear-gradient(wheat, white)">Ending Balance - <br>30 Sep 2022</br></th>
                                        <th style="background-image: linear-gradient(wheat, white)">Estimated Revenue Recognised - One year ahead</th>
                                        <th style="background-image: linear-gradient(wheat, white)">Estimated Billing - One year ahead</br></th>
                                        <th style="background-image: linear-gradient(wheat, white)">One year ahead</th>
                                        <th style="background-image: linear-gradient(wheat, white)">More than a year ahead</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data as $d){ 
                                        ?>

										                    <tr style="color:black;">
										                    <!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
                                        
                                        <td><?php echo $d['Column8_2'];?></td>
                                        <td><?php echo $d['Column8_3'];?></td>
                                        <td><?php echo $d['Column8_4']; ?></td>
                                        <td><?php echo $d['Column8_5']; ?></td>
                                        <td><?php echo $d['Column8_6']; ?></td>
                                        <td><?php echo $d['Column8_7']; ?></td>
                                        <td><?php echo $d['Column8_8']; ?></td>
                                        <td><?php echo $d['Column8_9']; ?></td>
                                        <td><?php echo $d['Column8_10']; ?></td>
                                        <td><?php echo $d['Column8_11']; ?></td>
                                        <td><?php echo $d['Column8_12']; ?></td>
                                        <td><?php echo $d['Column8_13']; ?></td>
                                        <td><?php echo $d['Column8_14']; ?></td>
                                        <td><?php echo $d['Column8_15']; ?></td>
                                        <td><?php echo $d['Column8_16']; ?></td>
                                        <td><?php echo $d['Column8_17']; ?></td>
                                        <td><?php echo $d['Column8_18']; ?></td>

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