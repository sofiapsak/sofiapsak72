    <!-- Theme Customizer -->

    <a href="#" data-target="theme-cutomizer-out" class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text sidenav-trigger theme-cutomizer-trigger buy-now-animated tada" style="margin-top:-190px;height:40px;"><i class="material-icons">group_work</i> <b>Filter</b></a>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row " style="zoom:100%;width:240px; background-image: linear-gradient(mintcream, powderblue);" >
   <div class="col s12">
      <a class="sidenav-close" href="#!"><i class="material-icons">close</i> &nbsp;</a>
      <h5 class="theme-cutomizer-title"><i class="material-icons">sort</i> Filter</h5>
      <br>
      <form action="<?= base_url('home/multi');?>" method="POST">
        <label style="font-weight:bold; color:black;"><input type="hidden" class="filled-in" name="46" value="46"><i class="small material-icons">local_bar</i><span>&nbsp;Departemen</span></label><br>  
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="dbs" value="DBS"><span>DBS</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="des" value="DES"><span>DES</span></label><br>    
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="dgs" value="DGS"><span>DGS</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg1" value="REG 1"><span>REG 1</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg2" value="REG 2"><span>REG 2</span></label><br>    
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg3" value="REG 3"><span>REG 3</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg4" value="REG 4"><span>REG 4</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg5" value="REG 5"><span>REG 5</span></label><br>    
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg6" value="REG 6"><span>REG 6</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="reg7" value="REG 7"><span>REG 7</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="sda" value="SDA"><span>SDA</span></label><br>    
<br>
        <label style="font-weight:bold;color:black;"><input type="hidden" class="filled-in" name="47" value="47"><i class="small material-icons">local_bar</i><span>&nbsp;KPP Reference</span></label><br>  
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="new" value="New Contract"><span>New Contract</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="carry" value="Carry Forward"><span>Carry Forward</span></label><br>
        <label style="margin-left:10px;color:black;"><input type="checkbox" name="accrue" value="Accrue"><span>Accrue</span></label><br>
        <br>
        <label><button type="submit" name="kirim" value="KIRIM" class="waves-effect waves-light btn-small">Single</button>
        <label><button type="submit" name="submit" value="SUBMIT" class="waves-effect waves-light btn-small">Multi</button></label></label>
        </form>
          </div>
        </li>
        
      </ul>
   </div>
</div>
<!--/ Theme Customizer -->