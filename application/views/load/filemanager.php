
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
          <input type="file" name="pic_file" class="form-control"  id="pic_file" required>
      </div>
      <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
      </div>
      <div class="input-field">
            <button class="btn waves-effect waves-light right" type="submit">Submit
              <i class="material-icons right">send</i>
            </button>
          <p style="color:red;">*Type File : Xls, Xlsx, Xlsm<br>Silahkan Upload File terlebih dahulu sebelum upload ke Database</p>
          </div>
      </div>
      </form>
    </div>
    <hr>
    <br>
        <!-- Add File Button -->
        <form action="../../application/views/python.php" id="upload_data"> 
          <button class="add-file-btn btn waves-effect waves-light mb-2 right" style="margin-top:10px;">
            <i class="material-icons">cloud_upload</i>
            <span>Upload File to Database</span>
          </button>       
          </form>
      <script>
          document.querySelector('#upload_data').addEventListener('submit', function(e) {
            var form = this;
            
            e.preventDefault();
            
            swal({
                title: "Confirmation",
                text: "Are you sure you want to submit all these file to database?",
                icon: "warning",
                buttons: [
                  'No, cancel it!',
                  'Yes, I am sure!'
                ],
                dangerMode: false,
              }).then(function(isConfirm) {
                if (isConfirm) {
                  swal({
                    title: 'Success!',
                    text: 'You has successfully submitted file to database, Click Ok and please wait for loading will take a long time to finish',
                    icon: 'success'
                  }).then(function() {
                    form.submit();
                  });
                } else {
                  swal("Cancelled", "Your file was canceled for upload", "error");
                }
              });
          });
      </script>
        <table class="bordered" style="font-size:20px;">
        <h5 style="text-decoration:underline;font-family:Trebuchet MS;">File Manager</h5>
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
            <label><input type='hidden' class="filled-in" name='id[]' value='<?php echo $data['id']?>'><span style="margin-left:20px;"></span></label>
          </tr>
          <?php } ?>
          </tbody>
        </table><br>
          
        <!--<br><br><span class="right" style="color:red;">*Delete All File dan Data</span>
        <br><span class="right" style="color:red;">*Pastikan Data Terceklis Semua</span>-->        
      
      <form action="<?= base_url('home/delete');?>" method="POST" id="from1">
      <button class='btn btn-warning-cancel waves-effect waves-light right' style="height:35px;background-color:#FF0000;"><b>Delete All Data</b></button>
      </form>
      <script>
          document.querySelector('#from1').addEventListener('submit', function(e) {
            var form = this;
            
            e.preventDefault();
            
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this file/data!",
                icon: "warning",
                buttons: [
                  'No, cancel it!',
                  'Yes, I am sure!'
                ],
                dangerMode: false,
              }).then(function(isConfirm) {
                if (isConfirm) {
                  swal({
                    title: 'Success!',
                    text: 'Candidates are successfully deleted this file/data, Click Ok and please wait for loading to finish',
                    icon: 'success'
                  }).then(function() {
                    form.submit();
                  });
                } else {
                  swal("Cancelled", "Your file/data is safe :)", "error");
                }
              });
          });
      </script>

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
    <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });
    
    $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
      var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi
      
      if(confirm) // Jika user mengklik tombol "Ok"
        $("#form-delete").submit(); // Submit form
    });
  });
  </script>