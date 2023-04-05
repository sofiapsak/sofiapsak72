 <!-- BEGIN: SideNav-->
 <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
      <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?= base_url('home/');?>"><img class="hide-on-med-and-down " src="<?= base_url('application/views/vendor/BDO_logo1.png');?>" style="margin-left:-5px;margin-bottom:-1px;" alt="materialize logo"><img class="show-on-medium-and-down hide-on-med-and-up" src="<?= base_url('application/views/vendor/BDO_logo.png');?>" alt="materialize logo"><span class="logo-text hide-on-med-and-down"></span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        
        <li class=" bold"><a class="waves-effect waves-cyan " href="<?= base_url('home');?>"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Mail">Dashboard</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">5 Step Model Assessment</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_step1');?>"><i class="material-icons">radio_button_unchecked</i><span class="menu-title" data-i18n="Mail">Step 1</span></a>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_step2');?>"><i class="material-icons">radio_button_unchecked</i><span class="menu-title" data-i18n="Chat">Step 2</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_step3');?>"><i class="material-icons">radio_button_unchecked</i><span class="menu-title" data-i18n="ToDo">Step 3</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_step4');?>"><i class="material-icons">radio_button_unchecked</i><span class="menu-title" data-i18n="Kanban">Step 4</span></a>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_step5');?>"><i class="material-icons">radio_button_unchecked</i><span class="menu-title" data-i18n="File Manager">Step 5</span></a>
        </li>

        <li class="navigation-header"><a class="navigation-header-text">Adjustment Calculation</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_comp_adj');?>"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Contacts">Comp Adj Per Kontrak</span></a>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan" href="<?php echo base_url('home/data_comp_gl');?>"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Calendar">Comp Adj Per GL</span></a>
        </li>

        <li class="navigation-header"><a class="navigation-header-text">Monitoring Ending Balance</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_kk_44');?>"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Calendar">KK 4.4</span></a>
        </li>

        <li class="navigation-header"><a class="navigation-header-text">Financial Disclosure</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="active bold"><a class="waves-effect waves-cyan active" href="<?php echo base_url('home/data_comp_summary');?>"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Contacts">Comp Summary of Unsatisfied PO</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/data_proyeksi_revenue');?>"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="Calendar">Proyeksi Revenue</span></a>
        </li>
        <li class=" bold"><a class="waves-effect waves-cyan" href="<?php echo base_url('home/data_alokasi');?>"><i class="material-icons">today</i><span class="menu-title" data-i18n="Calendar">Alokasi CACL</span></a>
        </li>

        <li class="navigation-header"><a class="navigation-header-text">File Manager</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/filemanager');?>"><i class="material-icons">cloud_upload</i><span class="menu-title" data-i18n="Contacts">Import to Database</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo base_url('home/analytics');?>"><i class="material-icons">equalizer</i><span class="menu-title" data-i18n="Contacts">Analytics</span></a>
        </li>

        <br> <br><br>
        <li class="navigation-header"><a class="navigation-header-text">Download File</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <form action="<?php echo base_url('home/multiple_spreadsheet');?>" id="download_data">
        <li class="bold"><button class="add-file-btn btn mb-2" style="background-color:#2C323F;border:none;box-shadow:none;margin-top:10px;"><i class="material-icons">cloud_download</i>&nbsp; Download to Excel</button>
        </li></form>

        <li class="navigation-header"><a class="navigation-header-text">&copy; Copyright BDO Indonesia</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->