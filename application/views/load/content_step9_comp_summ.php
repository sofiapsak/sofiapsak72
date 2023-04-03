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
				<h5 class="text-black h4">Contract Review PSAK 72 - Comp Summary of Unsatisfied PO </h5>
				<h6 class="text-black h5">PT TELKOM INDONESIA Tbk</h6>
          <div class="row">
            <div class="col s12">

			<div class="table-responsive">
			<div id="tableFixHead">
              <table id="page-length-option" class="table-bordered hover stripe multiple-select-row nowrap">
			  <br>			
			  <thead>
							<tr style="font-weight:bolder;">
										                    <th style="background-image: linear-gradient(silver, white)">No</th>
                                        <th style="background-image: linear-gradient(silver, white)">Contract Number</th>
                                        <th style="background-image: linear-gradient(silver, white)">Customer Name</th>
                                        <th style="background-image: linear-gradient(silver, white)">Contract <br>Start Date</th>
                                        <th style="background-image: linear-gradient(silver, white)">Contract <br>End Date</th>
                                        <th style="background-image: linear-gradient(silver, white)">Price Allocation<br>(after discount & <br>variable consideration)</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Recognised<br>Revenue <br>2019</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Recognised<br>Revenue <br>2020</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Recognised<br>Revenue <br>2021</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Recognised<br>Revenue <br>Q3 2022</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Estimated<br>Recognised Revenue<br>(One Year Ahead)</th>
                                        <th style="background-image: linear-gradient(silver, white)">Unsatisfied PO<br>30 September 2022</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Current Portion/<br>One Year Ahead</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Noncurrent Portion//<br>More Than One Year</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">BP Number</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data as $d){ 
                                        ?>

										                    <tr style="color:black;">
										                    <!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
                                        
                                        <td><?php echo $d['Column9_2'];?></td>
                                        <td><?php echo $d['Column9_3'];?></td>
                                        <td><?php echo $d['Column9_4']; ?></td>
                                        <td><?php echo $d['Column9_5']; ?></td>
                                        <td><?php echo $d['Column9_6']; ?></td>
                                        <td><?php echo $d['Column9_7']; ?></td>
                                        <td><?php echo $d['Column9_8']; ?></td>
                                        <td><?php echo $d['Column9_9']; ?></td>
                                        <td><?php echo $d['Column9_10']; ?></td>
                                        <td><?php echo $d['Column9_11']; ?></td>
                                        <td><?php echo $d['Column9_12']; ?></td>
                                        <td><?php echo $d['Column9_13']; ?></td>
                                        <td><?php echo $d['Column9_14']; ?></td>
                                        <td><?php echo $d['Column9_15']; ?></td>
                                        <td><?php echo $d['Column9_16']; ?></td>

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