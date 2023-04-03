<style>
  ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: black;
  opacity: 1; /* Firefox */
}

</style>
<div class="row" style="zoom:113.7%;">
      <div class="col s12">
        <div class="container">  
          <div class="row center">        
          <img class="hide-on-med-and-down center" src="<?= base_url('Application/views/vendor/BDO_logo.png');?>" style="margin-bottom:-130px;" alt="materialize logo" width="110" height="40">
          </div>
<div id="login-page" class="row" style="color:black;">
  <div class="col s12 m6 l4 z-depth-4 border-radius-6" style="background-color:rgba(255, 255, 255, 0.8);;margin-left:0px;">
    <form class="login-form" action="<?php echo site_url('login/auth');?>" method="post">
      <div class="row center">
        <div class="input-field col s12">      
          <h5 class="ml-0" style="font-size:30px;text-align:center;font-family:Trebuchet MS;margin-bottom:-15px;"><b> &nbsp;&nbsp;Welcome Back,</b></h5><br>
          <span style="font-size:20px;text-align:center;font-family:Trebuchet MS;">Login Now to Continue</span>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="username" name="email" type="text" placeholder="Email" style="color:black;font-size:18px;" required>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input name="password" type="password" placeholder="Password" style="color:black;font-size:18px;" id="typepass" required><!-- An element to toggle between password visibility -->
          <a style="color:red;"><?php echo $this->session->flashdata('msg');?></a>
        </div>
        <label class="right"><input type="checkbox" class="filled-in" onclick="Toggle()"><span style="color:black;"><strong><b>Show Password</b></strong></span></label>

      </div><br>
      <div class="row">
        <div class="input-field col s12">
        <button class="btn waves-effect waves-light border-round gradient-45deg-blue-indigo col s12" type="submit">Login</button>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>