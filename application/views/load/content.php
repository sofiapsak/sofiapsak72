<!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section">
               <!-- card stats start -->
   <div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content cyan white-text">
                  <p class="card-stats-title"><i class="material-icons">person_outline</i> Pop. Proceed to WP</p>
                  <h4 class="card-stats-number white-text"><?php
                          //Inisialisasi nilai variabel awal
                          $col6_3= null;
                          foreach ($hasil as $item)
                          {
                            $total=$item->kontrak;
                            $col6_3 = $total;
                            $angka_format = number_format($col6_3,0,",",".");
                            echo "<p  style='color:white;margin-top:-5px;'>$angka_format Kontrak</p>";
                          }
                          ?> 
                          </h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 15%
                     <span class="cyan text text-lighten-5">from updated</span>
                  </p>
               </div>
               <div class="card-action cyan darken-1">
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content red accent-2 white-text">
                  <p class="card-stats-title"><i class="material-icons">attach_money</i> Total Contract's Value</p>
                  <h4 class="card-stats-number white-text"><?php
                            //Inisialisasi nilai variabel awal
                            $total= null;
                            foreach ($hasil2 as $item)
                            {
                              $total=$item->alldept;
                              $value += $total;
                              if($total <= 1000000000){
                              $potong_angka = substr($value,0,5);
                              $angka_format = number_format($potong_angka,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format Juta</p>";
                              }else {
                              $potong_angka1 = substr($value,0,5);
                              $angka_format1 = number_format($potong_angka1,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format1 Milyar</p>";
                              }
                            }
                            ?></h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 70% <span class="red-text text-lighten-5">from updated</span>
                  </p>
               </div>
               <div class="card-action red">
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content orange lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">trending_up</i> Total Billing Related</p>
                  <h4 class="card-stats-number white-text"><?php
                            //Inisialisasi nilai variabel awal
                            $total= null;
                            foreach ($hasil3 as $item)
                            {
                              $total =$item->tambah;
                              $value += $total;
                              if($total <= 1000000000){
                              $potong_angka = substr($value,0,5);
                              $angka_format = number_format($potong_angka,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format Juta</p>";
                              }else {
                              $potong_angka1 = substr($value,0,5);
                              $angka_format1 = number_format($potong_angka1,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format1 Milyar</p>";
                              }
                            }
                            ?></h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 80%
                     <span class="orange-text text-lighten-5">from updated</span>
                  </p>
               </div>
               <div class="card-action orange">
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content green lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">content_copy</i> Total Revenue</p>
                  <h4 class="card-stats-number white-text"><?php
                            //Inisialisasi nilai variabel awal
                            $total= null;
                            foreach ($hasil4 as $item)
                            {
                              $total =$item->tambah;
                              $value += $total;
                              if($total <= 1000000000){
                              $potong_angka = substr($value,0,5);
                              $angka_format = number_format($potong_angka,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format Juta</p>";
                              }else {
                              $potong_angka1 = substr($value,0,5);
                              $angka_format1 = number_format($potong_angka1,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format1 Milyar</p>";
                              }
                            }
                            ?></h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_down</i> 3%
                     <span class="green-text text-lighten-5">from updated</span>
                  </p>
               </div>
               <div class="card-action green">
               </div>
            </div>
         </div>
         
         <div class="col s12 m8 l3">
            <div class="card animate fadeRight">
               <div class="card-content teal lighten-1 white-text">
                  <br><br><br>
                  <p class="card-stats-title"><i class="material-icons">content_copy</i> Total Cost</p>
                  <h4 class="card-stats-number white-text"><?php
                            //Inisialisasi nilai variabel awal
                            $total= null;
                            foreach ($hasil5 as $item)
                            {
                              $total =$item->tambah;
                              $value += $total;
                              if($total <= 1000000000){
                              $potong_angka = substr($value,0,5);
                              $angka_format = number_format($potong_angka,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format Juta</p>";
                              }else {
                              $potong_angka1 = substr($value,0,5);
                              $angka_format1 = number_format($potong_angka1,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format1 Milyar</p>";
                              }
                            }
                            ?></h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_down</i> 3%
                     <span class="green-text text-lighten-5">from updated</span>
                  </p>
                  <br><br><br>
               </div>
               <div class="card-action teal">
               </div>
            </div>
         </div>
         
         <div class="col s12 m8 l9">
            <div class="card animate fadeRight">
               <div class="card-content center teal lighten-1 white-text" style="width:100%;height:270px;">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">done</i>
                  </a>
                     <p class="margin white-text">Revenue by Departemen</p>
                     <canvas id="line-chart1" style="width:100%;height:215px;"></canvas>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by Departemen<i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="country-name">No</th>
                           <th data-field="item-sold" style='text-align:center;'>Departemen</th>
                           <th data-field="total-profit" style='text-align:right;'>Total Revenue By Departement</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php 
                          $no = 1;
                          $total - null;
                          foreach($graph1_dbs as $d){ 
                            $value = $d->dbs;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>DBS</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 2;
                          $total - null;
                          foreach($graph1_des as $d){ 
                            $value = $d->des;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>DES</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 3;
                          $total - null;
                          foreach($graph1_dgs as $d){ 
                            $value = $d->dgs;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>DGS</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          
                          <?php 
                          $no = 4;
                          $total - null;
                          foreach($graph1_reg1 as $d){ 
                            $value = $d->reg1;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 1</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 5;
                          $total - null;
                          foreach($graph1_reg2 as $d){ 
                            $value = $d->reg2;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 2</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 6;
                          $total - null;
                          foreach($graph1_reg3 as $d){ 
                            $value = $d->reg3;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 3</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 7;
                          $total - null;
                          foreach($graph1_reg4 as $d){ 
                            $value = $d->reg4;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 4</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 8;
                          $total - null;
                          foreach($graph1_reg5 as $d){ 
                            $value = $d->reg5;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 5</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 9;
                          $total - null;
                          foreach($graph1_reg6 as $d){ 
                            $value = $d->reg6;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 6</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 10;
                          $total - null;
                          foreach($graph1_reg7 as $d){ 
                            $value = $d->reg7;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>REG 7</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 11;
                          $total - null;
                          foreach($graph1_sda as $d){ 
                            $value = $d->sda;
                            $total += $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>SDA</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>

      </div>
   </div>
   <!--card stats end-->
   
   <!--chart dashboard start-->
   <div id="chart-dashboard">
      <div class="row">
         <div class="col s12 m8 l8">
            <div class="card animate fadeUp" style="width:100%;height:470px;">
               <div class="card-move-up waves-effect waves-block waves-light">
                  <div class="move-up cyan darken-1">
                     <div>
                        <span class="chart-title white-text">Monthly Revenue (in million)</span>
                        <!--<div class="chart-revenue cyan darken-2 white-text">
                           <p class="chart-revenue-total">$4,500.85</p>
                           <p class="chart-revenue-per"><i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                        </div>
                        <div class="switch chart-revenue-switch right">
                           <label class="cyan-text text-lighten-5">
                              Month <input type="checkbox"> <span class="lever"></span> Year
                           </label>
                        </div>-->
                     </div>
                        <br>
                     <div class="trending-line-chart-wrapper">
                      <canvas id="revenue-line-chart1" style="width:100%;height:185px;"></canvas>

                     </div>
                  </div>
               </div>
               <div class="card-content">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">filter_list</i>
                  </a>
                  <div class="col s12 m3 l3">
                     <div id="doughnut-chart-wrapper">
                        <canvas id="doughnut-chart" style="width:100%;height:140px;"></canvas>
                        <div class="doughnut-chart-status">
                           <p class="center-align font-weight-600 mt-0"><?php
                          //Inisialisasi nilai variabel awal
                          $col6_3= null;
                          foreach ($hasil as $item)
                          {
                            $total=$item->kontrak;
                            $col6_3 = $total;
                            $angka_format = number_format($col6_3,0,",",".");
                            echo "$angka_format";
                          }
                          ?></p>
                           <p class="ultra-small center-align">Kontrak</p>
                        </div>
                     </div>
                  </div>
                  <div class="col s1 m1 l1">
                     <ul class="doughnut-chart-legend">
                        <p style="background-color:#F7464A;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span>DBS </p>
                        <p style="background-color:#46BFBD;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> DES </p>
                        <p style="background-color:#FDB45C;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> DGS </p>
                        <p style="background-color:#7CFC00;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 1 </p>
                        <p style="background-color:#8B008B;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 2 </p>
                     </ul>

                     
                  </div>
                  <div class="col s1 m1 l1">
                     <ul class="doughnut-chart-legend">
                        <p style="background-color:#FF8C00;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 3 </p>
                        <p style="background-color:#FF1493;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 4 </p>
                        <p style="background-color:#DAA520;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 5 </p>
                        <p style="background-color:#800000;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 6 </p>
                        <p style="background-color:#708090;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> REG 7 </p>
                        <p style="background-color:#000080;color:white;text-align:center;margin-bottom:1px;"><span class="legend-color"></span> SDA </p>
                        </ul>
                  </div>
                  <div class="col s12 m5 l6">
                     <div class="trending-bar-chart-wrapper"><canvas id="trending-bar-chart" style="width:100%;height:170px;"></canvas></div>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Monthly Revenue (in million) <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="id">ID</th>
                           <th data-field="month" style='text-align:center;'>Month</th>
                           <th data-field="total-profit" style='text-align:right;'>Total Monthly Revenue</th>
                        </tr>
                     </thead>
                     <tbody>
                          <?php 
                          $no = 1;
                          $total - null;
                          foreach($monthrev_jan as $d){ 
                            $value = $d->jan;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>Januari</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 2;
                          $total - null;
                          foreach($monthrev_feb as $d){ 
                            $value = $d->feb;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>Februari</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 3;
                          $total - null;
                          foreach($monthrev_mar as $d){ 
                            $value = $d->mar;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>March</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 4;
                          $total - null;
                          foreach($monthrev_apr as $d){ 
                            $value = $d->apr;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>April</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 5;
                          $total - null;
                          foreach($monthrev_mei as $d){ 
                            $value = $d->mei;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>May</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 6;
                          $total - null;
                          foreach($monthrev_jun as $d){ 
                            $value = $d->jun;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>June</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 7;
                          $total - null;
                          foreach($monthrev_jul as $d){ 
                            $value = $d->jul;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>July</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 8;
                          $total - null;
                          foreach($monthrev_aug as $d){ 
                            $value = $d->aug;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>August</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 9;
                          $total - null;
                          foreach($monthrev_sept as $d){ 
                            $value = $d->sept;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>September</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 10;
                          $total - null;
                          foreach($monthrev_oct as $d){ 
                            $value = $d->oct;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>October</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 11;
                          $total - null;
                          foreach($monthrev_nov as $d){ 
                            $value = $d->nov;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>November</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                          <?php 
                          $no = 12;
                          $total - null;
                          foreach($monthrev_des as $d){ 
                            $value = $d->des;
                            $total = $value;
                            $angka_format = number_format($total,0,",",".");
                            echo "<tr><td>".$no++."</td>";
                            echo "<td style='text-align:center;'>Desember</td>";
                            echo "<td style='text-align:right;'>".$angka_format."</td></tr>";
                          }
                          ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
               <!--<div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
                  <div class="move-up">
                     <p class="margin white-text">Browser Stats</p>
                     <canvas id="trending-radar-chart" height="114"></canvas>
                  </div>
               </div>-->
               
              <div class="col s12 m4">
                <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3">
                  <div class="card-content center"  style="width:100%;height:220px;">
                    <img src="<?= base_url('app-assets/images/icon/printer.png')?>" alt="images" class="width-20">
                    <h5 class="white-text lighten-4"><?php
                            //Inisialisasi nilai variabel awal
                            $total= null;
                            foreach ($hasil6 as $item)
                            {
                              $total =$item->tambah;
                              $value = $total;
                              if($total <= 1000000000){
                              $potong_angka = substr($value,0,5);
                              $angka_format = number_format($potong_angka,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format Juta</p>";
                              }else {
                              $potong_angka1 = substr($value,0,5);
                              $angka_format1 = number_format($potong_angka1,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format1 Milyar</p>";
                              }
                            }
                            ?></h5>
                    <p class="white-text lighten-4" style="margin-bottom:22px;font-size:18px;">Total Adjustment CACL</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3">
                  <div class="card-content center"  style="width:100%;height:220px;">
                    <img src="<?= base_url('app-assets/images/icon/laptop.png')?>" alt="images" class="width-20">
                    <h5 class="white-text lighten-4"><?php
                            //Inisialisasi nilai variabel awal
                            $total= null;
                            foreach ($hasil7 as $item)
                            {
                              $total =$item->tambah;
                              $value = $total;
                              if($total <= 1000000000){
                              $potong_angka = substr($value,0,5);
                              $angka_format = number_format($potong_angka,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format Juta</p>";
                              }else {
                              $potong_angka1 = substr($value,0,5);
                              $angka_format1 = number_format($potong_angka1,0,",",".");
                              echo "<p  style='color:white;margin-top:-5px;'>$angka_format1 Milyar</p>";
                              }
                            }
                            ?></h5>
                    <p class="white-text lighten-4" style="margin-bottom:22px;font-size:18px;">Total Ending Balance</p>
                  </div>
                </div>
              </div>

      </div>
   </div>
   <!--chart dashboard end-->
   <!--work collections start-->
   <div id="work-collections">
      <div class="row">
         <div class="col s12 m12 l6">
            <ul id="projects-collection" class="collection z-depth-1 animate fadeLeft">
               <li class="collection-item avatar">
                  <i class="material-icons light-green circle" style="color:white;">arrow_upward</i>
                  <h6 class="collection-header m-5">Top Adjustment CA</h6>
               </li>
                  <?php
                    if (count($topca)>0) {
                    foreach ($topca as $data) {
                      $value=$data->Total_ADJ_CACL;
                      $total = $value;
                      $angka_format = number_format($total,0,",",".");
                    ?>
                    <li class="collection-item">
                       <div class="row">
                     <div class="col s7">
                        <p class="collections-title" style='font-size:18px;color:black;'><?php echo "".$data->Contract_Number." ";?></p>
                        <p class="collections-content" style='font-size:18px;color:black;'><?php echo "".$data->Customer_Name." ";?></p>
                     </div> 
                     <?php
                     $ubis = $data->Departement;
                         if($ubis == "DBS"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#F7464A;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "DES"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#46BFBD;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "DGS"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#FDB45C;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 1"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#006400;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 2"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#8B008B;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 3"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#FF8C00;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 4"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#FF1493;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 5"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#DAA520;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 6"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#800000;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 7"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#708090;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "SDA"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#000080;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }
                     ?>
                     <?php echo "<div class='col s1'><span class='task-cat' style='font-size:18px;color:black;'>".$angka_format."</span></div>";?>
                     <br>
                  </div>  
               </li>
                     <?php } }?>
            </ul>
         </div>
         <div class="col s12 m12 l6">
            <ul id="issues-collection" class="collection z-depth-1 animate fadeRight">
               <li class="collection-item avatar">
                  <i class="material-icons red accent-2 circle">arrow_downward</i>
                  <h6 class="collection-header m-5">Top Adjustment CL</h6>
               </li>
                  <?php
                    if (count($topcl)>0) {
                    foreach ($topcl as $data) {
                      $value=$data->Total_ADJ_CACL;
                      $total = $value;
                      $angka_format = number_format($total,0,",",".");
                    ?>
                    <li class="collection-item">
                       <div class="row">
                     <div class="col s7">
                        <p class="collections-title" style='font-size:18px;color:black;'><?php echo "".$data->Contract_Number." ";?></p>
                        <p class="collections-content" style='font-size:18px;color:black;'><?php echo "".$data->Customer_Name." ";?></p>
                     </div> 
                     <?php
                     $ubis = $data->Departement;
                         if($ubis == "DBS"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#F7464A;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "DES"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#46BFBD;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "DGS"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#FDB45C;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 1"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#006400;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 2"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#8B008B;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 3"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#FF8C00;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 4"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#FF1493;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 5"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#DAA520;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 6"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#800000;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "REG 7"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#708090;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }if($ubis == "SDA"){
                           echo "<div class='col s2'><span class='task-cat' style='font-size:18px;background-color:#000080;color:white;text-align:center;'>".$ubis."</span></p></div>";
                        }
                     ?>
                     <?php echo "<div class='col s1'><span class='task-cat' style='font-size:18px;color:black;'>".$angka_format."</span></div>";?>
                     <br>
                  </div>  
               </li>
                     <?php } }?>
            </ul>
         </div>
      </div>
   </div>
   <!--work collections end-->


   </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
    <script>! function (o, e) {
	function t(o) {
		e(o).is(":checked") ? e(o).next().css("text-decoration", "line-through") : e(o).next().css("text-decoration", "none")
	}
    e("#task-card input:checkbox").each(function () {
		t(this)
	}), e("#task-card input:checkbox").change(function () {
		t(this)
	});
	var a, r = e("#revenue-line-chart1"),
		i = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Des'],
			datasets: [{
				label: "Today",
				data: [<?php
								foreach ($monthrev_jan as $data) {
									echo "" .$data->jan.",";
								}
								?>
                
								<?php
								foreach ($monthrev_feb as $data) {
									echo "" .$data->feb.",";
								}
								?>
								<?php
								foreach ($monthrev_mar as $data) {
									echo "" .$data->mar.",";
								}
								?>
								<?php
								foreach ($monthrev_apr as $data) {
									echo "" .$data->apr.",";
								}
								?>
								<?php
								foreach ($monthrev_mei as $data) {
									echo "" .$data->mei.",";
								}
								?>
								<?php
								foreach ($monthrev_jun as $data) {
									echo "" .$data->jun.",";
								}
								?>
								<?php
								foreach ($monthrev_jul as $data) {
									echo "" .$data->jul.",";
								}
								?>
								<?php
								foreach ($monthrev_aug as $data) {
									echo "" .$data->aug.",";
								}
								?>
								<?php
								foreach ($monthrev_sept as $data) {
									echo "" .$data->sept.",";
								}
								?>
								<?php
								foreach ($monthrev_oct as $data) {
									echo "" .$data->oct.",";
								}
								?>
								<?php
								foreach ($monthrev_nov as $data) {
									echo "" .$data->nov.",";
								}
								?>
								<?php
								foreach ($monthrev_des as $data) {
									echo "" .$data->des.",";
								}
                ?>],
				backgroundColor: "rgba(128, 222, 234, 0.5)",
				borderColor: "#d1faff",
				pointBorderColor: "#d1faff",
				pointBackgroundColor: "#00bcd4",
				pointHighlightFill: "#d1faff",
				pointHoverBackgroundColor: "#d1faff",
				borderWidth: 2,
				pointBorderWidth: 2,
				pointHoverBorderWidth: 4,
				pointRadius: 4
			}],
         
		};
	var l, n = {
			type: "line",
			options: {
				responsive: false,
            locale: 'en-IN',
				legend: {
					display: !1
				},
				hover: {
					mode: "label"
				},
				scales: {
					xAxes: [{
						display: !0,
						gridLines: {
							display: !1
						},
						ticks: {
							fontColor: "#fff"
						}
					}],
					yAxes: [{
						display: !0,
						fontColor: "#fff",
						gridLines: {
							display: !0,
							color: "rgba(255,255,255,0.3)"
						},
						ticks: {
							fontColor: "#fff",
                     callback: function(label, index, ticks) {
                        return label/1000000;
                     }
						},
                  scaleLabel: {
						  fontColor: "#fff",
                    display: true,
                    labelString: '(in billion)'
                }
					}]
				}
			},
			data: i
		},
		d = e("#doughnut-chart"),
		s = {
			type: "doughnut",
			options: b = {
				cutoutPercentage: 70,
				legend: {
					display: !1
				}
			},
			data: {
				labels: ["DBS", "DES", "DGS", "REG 1", "REG 2", "REG 3", "REG 4", "REG 5", "REG 6", "REG 7", "SDA"],
				datasets: [{
					label: "Kontrak",
					data: [<?php
                  //Inisialisasi nilai variabel awal
                  foreach ($hasil_dept as $item)
                    {
                      $total=$item->kontrak_dept;

                      echo "".$total.",";
                    }
                  ?>],
					backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#7CFC00", "#8B008B", "#FF8C00", "#FF1493", "#DAA520", "#800000", "#708090", "#000080"]
				}]
			}
		},
		f = e("#trending-bar-chart"),
		p = {
			labels: ["DBS", "DES", "DGS", "REG 1", "REG 2", "REG 3", "REG 4", "REG 5", "REG 6", "REG 7", "SDA"],
			datasets: [{
				label: "Sales",
				data: [<?php
                                if (count($graph3_dbs)>0) {
                                foreach ($graph3_dbs as $data) {
                                  echo $data->dbs. ", ";
                                }
                                }
                              ?>
                              <?php
                              if (count($graph3_des)>0) {
                              foreach ($graph3_des as $data) {
                                echo $data->des. ", ";
                              }
                              }
                            ?>
                            <?php
                            if (count($graph3_dgs)>0) {
                            foreach ($graph3_dgs as $data) {
                              echo $data->dgs. ", ";
                            }
                            }
                          ?><?php
                          if (count($graph3_reg1)>0) {
                          foreach ($graph3_reg1 as $data) {
                            echo $data->reg1. ", ";
                          }
                          }
                        ?>
                        <?php
                        if (count($graph3_reg2)>0) {
                        foreach ($graph3_reg2 as $data) {
                          echo $data->reg2. ", ";
                        }
                        }
                      ?>
                      <?php
                      if (count($graph3_reg3)>0) {
                      foreach ($graph3_reg3 as $data) {
                        echo $data->reg3. ", ";
                      }
                      }
                    ?>
                    <?php
                    if (count($graph3_reg4)>0) {
                    foreach ($graph3_reg4 as $data) {
                      echo $data->reg4. ", ";
                    }
                    }
                  ?>
                  <?php
                  if (count($graph3_reg5)>0) {
                  foreach ($graph3_reg5 as $data) {
                    echo $data->reg5. ", ";
                  }
                  }
                ?>
                <?php
                if (count($graph3_reg6)>0) {
                foreach ($graph3_reg6 as $data) {
                  echo $data->reg6. ", ";
                }
                }
              ?>
              <?php
              if (count($graph3_reg7)>0) {
              foreach ($graph3_reg7 as $data) {
                echo $data->reg7. ", ";
              }
              }
            ?>
            <?php
            if (count($graph3_sda)>0) {
            foreach ($graph3_sda as $data) {
              echo $data->sda. ", ";
            }
            }
          ?>],
				backgroundColor: "#46BFBD",
				hoverBackgroundColor: "#009688"
			}]
		};
	var h, c = {
			type: "bar",
			options: {
				responsive: false,
				legend: {
					display: !1
				},
				hover: {
					mode: "label"
				},
				scales: {
					xAxes: [{
						display: !0,
						fontColor: "#000",
						gridLines: {
							display: !1
						}
					}],
					yAxes: [{
						display: !0,
						fontColor: "#000",
						gridLines: {
							display: !1
						},
						ticks: {
                     beginAtZero: true,
                     callback: function(label, index, ticks) {
                        return label/1000000;
                     }
						},
                  scaleLabel: {
						  fontColor: "#000",
                    display: true,
                    labelString: '(in billion)'
                }
					}]
				},
				tooltips: {
					titleFontSize: 0,
					callbacks: {
						label: function (o, e) {
							return o.yLabel
						}
					}
				}
			},
			data: p
		},
		g = e("#trending-radar-chart"),
		b = {
			responsive: !0,
			legend: {
				display: !1
			},
			hover: {
				mode: "label"
			},
			scale: {
				angleLines: {
					color: "rgba(255,255,255,0.4)"
				},
				gridLines: {
					color: "rgba(255,255,255,0.2)"
				},
				ticks: {
					display: !1
				},
				pointLabels: {
					fontColor: "#fff"
				}
			}
		},
		C = {
			labels: ["Chrome", "Mozilla", "Safari", "IE10", "Opera"],
			datasets: [{
				label: "Browser",
				data: [5, 6, 7, 8, 6],
				fillColor: "rgba(255,255,255,0.2)",
				borderColor: "#fff",
				pointBorderColor: "#fff",
				pointBackgroundColor: "#00bfa5",
				pointHighlightFill: "#fff",
				pointHoverBackgroundColor: "#fff",
				borderWidth: 2,
				pointBorderWidth: 2,
				pointHoverBorderWidth: 4
			}]
		};
	setInterval(function () {
		if (void 0 !== h) {
			0;
			var o = Math.floor(10 * Math.random()) + 1;
			C.datasets[0].data.pop(), C.datasets[0].data.push([o]), h.update()
		}
	}, 2e3);
	var u = {
			type: "radar",
			options: b,
			data: C
		},
		y = e("#line-chart1"),
		k = {
			type: "line",
			options: {
				responsive: false,
				legend: {
					display: !1
				},
				hover: {
					mode: "label"
				},
				scales: {
					xAxes: [{
						display: !0,
						gridLines: {
							display: !1
						},
						ticks: {
							fontColor: "#fff",
						}
					}],
					yAxes: [{
						display: !0,
						fontColor: "#fff",
						gridLines: {
							display: !1
						},
						ticks: {
							fontColor: "#fff",
                     callback: function(label, index, ticks) {
                        return label/1000000;
                     }
						},
                  scaleLabel: {
						  fontColor: "#fff",
                    display: true,
                    labelString: '(in billion)'
                }
					}]
				}
			},
			data: {
				labels: ["DBS", "DES", "DGS", "REG 1", "REG 2", "REG 3", "REG 4", "REG 5", "REG 6", "REG 7", "SDA"],
				datasets: [{
					label: "Revenue by Departemen",
					data: [<?php
                    $total = null;
                    if (count($graph1_dbs)>0) {
                      foreach ($graph1_dbs as $data) {
                        echo $data->dbs. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_des)>0) {
                      foreach ($graph1_des as $data) {
                        echo $data->des. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_dgs)>0) {
                      foreach ($graph1_dgs as $data) {
                        echo $data->dgs. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg1)>0) {
                      foreach ($graph1_reg1 as $data) {
                        echo $data->reg1. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg2)>0) {
                      foreach ($graph1_reg2 as $data) {
                        echo $data->reg2. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg3)>0) {
                      foreach ($graph1_reg3 as $data) {
                        echo $data->reg3. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg4)>0) {
                      foreach ($graph1_reg4 as $data) {
                        echo $data->reg4. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg5)>0) {
                      foreach ($graph1_reg5 as $data) {
                        echo $data->reg5. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg6)>0) {
                      foreach ($graph1_reg6 as $data) {
                        echo $data->reg6. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_reg7)>0) {
                      foreach ($graph1_reg7 as $data) {
                        echo $data->reg7. ", ";
                      }
                    }
                 ?>
                 <?php
                    $total = null;
                    if (count($graph1_sda)>0) {
                      foreach ($graph1_sda as $data) {
                        echo $data->sda. ", ";
                      }
                    }
                 ?>],
					fill: !1,
					lineTension: 0,
					borderColor: "#fff",
					pointBorderColor: "#fff",
					pointBackgroundColor: "#009688",
					pointHighlightFill: "#fff",
					pointHoverBackgroundColor: "#fff",
					borderWidth: 2,
					pointBorderWidth: 2,
					pointHoverBorderWidth: 4,
					pointRadius: 4
				}]
			}
		};
	o.onload = function () {
		a = new Chart(r, n), l = new Chart(f, c);
		new Chart(d, s);
		h = new Chart(g, u);
		new Chart(y, k)
	}, e(function () {
		e("#clients-bar").sparkline([70, 80, 65, 78, 58, 80, 78, 80, 70, 50, 75, 65, 80, 70, 65, 90, 65, 80, 70, 65, 90], {
			type: "bar",
			height: "25",
			barWidth: 7,
			barSpacing: 4,
			barColor: "#b2ebf2",
			negBarColor: "#81d4fa",
			zeroColor: "#81d4fa"
		}), e("#sales-compositebar").sparkline([4, 6, 7, 7, 4, 3, 2, 3, 1, 4, 6, 5, 9, 4, 6, 7, 7, 4, 6, 5, 9], {
			type: "bar",
			barColor: "#F6CAFD",
			height: "25",
			width: "100%",
			barWidth: "7",
			barSpacing: 4
		}), e("#sales-compositebar").sparkline([4, 1, 5, 7, 9, 9, 8, 8, 4, 2, 5, 6, 7], {
			composite: !0,
			type: "line",
			width: "100%",
			lineWidth: 2,
			lineColor: "#fff3e0",
			fillColor: "rgba(255, 82, 82, 0.25)",
			highlightSpotColor: "#fff3e0",
			highlightLineColor: "#fff3e0",
			minSpotColor: "#00bcd4",
			maxSpotColor: "#00e676",
			spotColor: "#fff3e0",
			spotRadius: 4
		}), e("#profit-tristate").sparkline([2, 3, 0, 4, -5, -6, 7, -2, 3, 0, 2, 3, -1, 0, 2, 3, 3, -1, 0, 2, 3], {
			type: "tristate",
			width: "100%",
			height: "25",
			posBarColor: "#ffecb3",
			negBarColor: "#fff8e1",
			barWidth: 7,
			barSpacing: 4,
			zeroAxis: !1
		}), e("#invoice-line").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9, 5], {
			type: "line",
			width: "100%",
			height: "25",
			lineWidth: 2,
			lineColor: "#E1D0FF",
			fillColor: "rgba(255, 255, 255, 0.2)",
			highlightSpotColor: "#E1D0FF",
			highlightLineColor: "#E1D0FF",
			minSpotColor: "#00bcd4",
			maxSpotColor: "#4caf50",
			spotColor: "#E1D0FF",
			spotRadius: 4
		}), e("#project-line-1").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
			type: "line",
			width: "100%",
			height: "30",
			lineWidth: 2,
			lineColor: "#00bcd4",
			fillColor: "rgba(0, 188, 212, 0.2)"
		}), e("#project-line-2").sparkline([6, 7, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4], {
			type: "line",
			width: "100%",
			height: "30",
			lineWidth: 2,
			lineColor: "#00bcd4",
			fillColor: "rgba(0, 188, 212, 0.2)"
		}), e("#project-line-3").sparkline([2, 4, 6, 7, 5, 6, 7, 9, 5, 6, 7, 9, 9, 5, 3, 2, 9, 5, 3, 2, 2, 4, 6, 7], {
			type: "line",
			width: "100%",
			height: "30",
			lineWidth: 2,
			lineColor: "#00bcd4",
			fillColor: "rgba(0, 188, 212, 0.2)"
		}), e("#project-line-4").sparkline([9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
			type: "line",
			width: "100%",
			height: "30",
			lineWidth: 2,
			lineColor: "#00bcd4",
			fillColor: "rgba(0, 188, 212, 0.2)"
		})
	})
}(window, (document, jQuery));

              </script>