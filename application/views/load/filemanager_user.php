
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="col s12">
          <div class="container">
            <div class="section app-file-manager-wrapper">
  <!-- content-right start -->
  <div class="content" style="margin:30px;">
    <!-- file manager main content start -->
    <div class="app-file-area">
      <!-- App File Content Starts -->
    <div class="app-file-content">

      <!-- File App Content Area -->
      <?php echo $error;?>
      
      <?php echo form_open_multipart('home/file_data');?>
      <h5 style="text-decoration:underline;font-family:Trebuchet MS;">Upload File Excel</h5><br>
      <label for="pic_title" style="color:black;font-size:15px;">Nama Lengkap*:</label>
          <textarea class="form-control" name="pic_title" id="pic_title" required><?= set_value('pic_title'); ?></textarea>

          <label for="pic_desc" style="color:black;font-size:15px;">Description*:</label>
          <textarea name="pic_desc" class="form-control" id="pic_desc" required><?= set_value('pic_desc'); ?></textarea>

          <input type="hidden" class="form-control" name="pic_time" value="<?php echo date('H:i:s');?>" id="pic_time">
          <input type="hidden" class="form-control" name="pic_date" value="<?php echo date('Y-m-d');?>" id="pic_date">

      <div class="file-field input-field">
      <div class="btn">
          <span>Select File*:</span>
          <input type="file" name="pic_file" class="form-control"  id="pic_file">
      </div>
      <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
      </div>
      <div class="input-field">
            <button class="btn waves-effect waves-light right" type="submit">Submit
              <i class="material-icons right">send</i>
            </button>
          <span style="color:red;">*Type File : Xls, Xlsx, Xlsm<br>Silahkan Upload File Excel anda terlebih dahulu</span>
          </div>
      </div>
      </form>
    </div>
    <hr>
    <br>
        <table class="bordered" style="font-size:20px;">
        <h5 style="text-decoration:underline;font-family:Trebuchet MS;">File Manager</h5><br>
          <thead>
          <tr>
            <th style="background-color: #03A9F4; color:white; text-align:center;" width="10">No</th>
            <th style="background-color: #03A9F4; color:white;">Name</th>
            <th style="background-color: #03A9F4; color:white;">Description</th>
            <th style="background-color: #03A9F4; color:white;">Nama File</th>            
            <th style="background-color: #03A9F4; color:white;">Time Upload</th>

          </tr>
          </thead>
          <tbody>
          <?php
            $no = 1;
            foreach($file as $data){

            ?>
          <tr>
            <td style="color:black;text-align:center;"><?php echo $no++ ?></td>
            <td style="color:black;"><?php echo $data['pic_title'];?></td>
            <td style="color:black;"><?php echo $data['pic_desc'];?></td>
            <td style="color:black;"><?php echo $data['pic_file'];?></td>
            <td style="color:black;"><?php echo $data['pic_date'];?>&nbsp; | &nbsp;<?php echo $data['pic_time'];?></td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
        <div class="mt-8"></div>
    </div>
  </div>
  <!-- content-right end -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->