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
				<h5 class="text-black h4">Contract Review PSAK 72 - Alokasi CACL per BP Number </h5>
				<h6 class="text-black h5">PT TELKOM INDONESIA Tbk</h6>
          <div class="row">
            <div class="col s12">

			<div class="table-responsive">
			<div id="tableFixHead">
              <table id="page-length-option" class="table-bordered hover stripe multiple-select-row nowrap data-tables display">
			  <br>			
			  <thead>
							<tr style="font-weight:bolder;">
										                    <th style="background-image: linear-gradient(silver, white)">No</th>
                                        <th style="background-image: linear-gradient(silver, white)">CI|BP Number</th>                                   
                                        <th style="background-image: linear-gradient(silver, white)">Contract Number</th>
                                        <th style="background-image: linear-gradient(silver, white)">BP  Number</th>
                                        <th style="background-image: linear-gradient(silver, white)">TIBS per CI + <br>BP Number</th>
                                        <th style="background-image: linear-gradient(silver, white)">Catch up <br> Billing</th>
                                        <th style="background-image: linear-gradient(silver, white)">Adjustment <br>Internal</th>
                                        <th style="background-image: linear-gradient(silver, white)">TIBS Sorodo</th>
                                        <th style="background-image: linear-gradient(silver, white)">Total Billing <br> Q3 2022</th>
                                        <th style="background-image: linear-gradient(silver, white)">TIBS 2019</th>
                                        <th style="background-image: linear-gradient(silver, white)">TIBS 2020</th>
                                        <th style="background-image: linear-gradient(silver, white)">TIBS 2021</th>
                                        <th style="background-image: linear-gradient(silver, white)">Accumulated <br>TIBS Up to Q3 2022</th>
                                        <th style="background-image: linear-gradient(silver, white)">TIBS per CI +<br>BP Number after Control (negative value)</th>
                                        <th style="background-image: linear-gradient(silver, white)">Proporsi per <br>BP Number</th>
                                        <th style="background-image: linear-gradient(silver, white)">Beginning <br>Balance <br>1 Jan 2022</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Reversal <br>Accrue 2021</th>
                                        <th style="background-image: linear-gradient(silver, white)">Catch up <br>Adjustment<br>Review CACL</th>
                                        <th style="background-image: linear-gradient(silver, white)">Adjustment CACL<br>Q3 2022</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Ending Balance<br>30 Sep 2022</br></th>
                                        <th style="background-image: linear-gradient(silver, white)">Estimated Revenue<br>Recognised<br>- One year ahead</th>
                                        <th style="background-image: linear-gradient(silver, white)">Estimated Billing<br>- One year ahead</th>
                                        <th style="background-image: linear-gradient(silver, white)">One year <br>ahead</th>
                                        <th style="background-image: linear-gradient(silver, white)">More than <br>a year ahead</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data as $d){ 
                                        ?>

										                    <tr style="color:black;">
										                    <!--<td><input type='checkbox' class='check-item' name='Column1[]' value='<?php /*echo $data['Column1']*/?>'></td>-->
                                        <td><?php echo $d['Column11_2'];?></td>
                                        <td><?php echo $d['Column11_3'];?></td>
                                        <td><?php echo $d['Column11_4']; ?></td>
                                        <td><?php echo $d['Column11_5']; ?></td>
                                        <td><?php echo $d['Column11_6']; ?></td>
                                        <td><?php echo $d['Column11_7']; ?></td>
                                        <td><?php echo $d['Column11_8']; ?></td>
                                        <td><?php echo $d['Column11_9']; ?></td>
                                        <td><?php echo $d['Column11_10']; ?></td>
                                        <td><?php echo $d['Column11_11']; ?></td>
                                        <td><?php echo $d['Column11_12']; ?></td>
                                        <td><?php echo $d['Column11_13']; ?></td>
                                        <td><?php echo $d['Column11_14']; ?></td>
                                        <td><?php echo $d['Column11_15']; ?></td>
                                        <td><?php echo $d['Column11_16']; ?></td>
                                        <td><?php echo $d['Column11_17']; ?></td>
                                        <td><?php echo $d['Column11_18']; ?></td>
                                        <td><?php echo $d['Column11_19']; ?></td>
                                        <td><?php echo $d['Column11_20']; ?></td>
                                        <td><?php echo $d['Column11_21']; ?></td>
                                        <td><?php echo $d['Column11_22']; ?></td>
                                        <td><?php echo $d['Column11_23']; ?></td>
                                        <td><?php echo $d['Column11_24']; ?></td>
                                        <td><?php echo $d['Column11_25']; ?></td>

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