  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>BDO INDONESIA</title>
    <link rel="apple-touch-icon" href="<?= base_url('app-assets/images/favicon/apple-touch-icon-16x16.png');?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('app-assets/images/favicon/favicon-32x32.png');?>">
    <link href="<?= base_url('app-assets/icon.css?family=Material+Icons" rel="stylesheet');?>">
    <link rel="stylesheet" href="https://kit.fontawesome.com/650de502bd.css" crossorigin="anonymous">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/vendors.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/flag-icon/css/flag-icon.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/data-tables/css/jquery.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/data-tables/css/select.dataTables.min.css');?>">
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/themes/vertical-dark-menu-template/materialize.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/themes/vertical-dark-menu-template/style.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/pages/dashboard.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/pages/data-tables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/pages/app-file-manager.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/pages/widget-timeline.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/pages/login.css');?>">
    
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css/custom/custom.css');?>">
    <!-- END: Custom CSS-->
    
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/views/vendors/styles/fixhead.css');?>">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('application/views/vendors/scripts/script-pop-up.js');?>"></script>
	<script language="javascript">
    if(screen.width>=1000) {document.write("<style>body{font-family:Trebuchet MS;}.table-responsive{zoom:100%;}.row{zoom:85%;}.pull-left{zoom:85%;}</style>");}
   </script> 
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');

	</script>
  <script>
        // Change the type of input to password or text
        function Toggle() {
            var temp = document.getElementById("typepass");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
    </script>
  </head>
  <!-- END: Head-->