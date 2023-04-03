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
				<h5 class="text-black h4">Contract Review PSAK 72 - Proyeksi Revenue </h5>
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
                                        <th style="background-image: linear-gradient(yellow, white)">Contract <br>Start Date</th>
                                        <th style="background-image: linear-gradient(yellow, white)">Contract <br>End Date</th>
                                        <th style="background-image: linear-gradient(yellow, white)">Unsatisfied PO<br>30 Sep 2022</br></th>
                                        <th style="background-image: linear-gradient(yellow, white)">Status End Date</th>
                                        <th style="background-image: linear-gradient(yellow, white)">Compile Step 5 - Projection <br>(Overtime - Time elapsed)</br></th>
                                        <th style="background-image: linear-gradient(yellow, white)">Estimated Recognised <br>Revenue <br>(One Year Ahead)</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data as $d){ 
                                        ?>

										                    <tr style="color:black;">
										                    <!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
                                        
                                        <td><?php echo $d['Column10_2'];?></td>
                                        <td><?php echo $d['Column10_3'];?></td>
                                        <td><?php echo $d['Column10_4']; ?></td>
                                        <td><?php echo $d['Column10_5']; ?></td>
                                        <td><?php echo $d['Column10_6']; ?></td>
                                        <td><?php echo $d['Column10_7']; ?></td>
                                        <td><?php echo $d['Column10_8']; ?></td>
                                        <td><?php echo $d['Column10_9']; ?></td>
                                        <td><?php echo $d['Column10_10']; ?></td>

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