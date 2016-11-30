<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><!--<html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8" />
<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/themer.css" media="screen">

<title> Error</title>

</head>
<body>

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
        <div id="mws-themer-content">
        	<div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
        	<div id="mws-theme-presets-container" class="mws-themer-section">
	        	<label for="mws-theme-presets">Color Presets</label>
            </div>
            <div class="mws-themer-separator"></div>
        	<div id="mws-theme-pattern-container" class="mws-themer-section">
	        	<label for="mws-theme-patterns">Background</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
        	<form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="<?php echo base_url()?>style/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	
            
            <!-- Messages -->
            
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="<?php echo base_url()?>style/images/01.png" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Developer, khaled abd elarahim
                    </div>
                    <ul>
                    	<li><a href="https://www.facebook.com/abdelrahim.00">facebook.com</a></li>
                        <li><a href="https://twitter.com/khaled_katkot">twitter.com</a></li>
                        <li><a href="<?php echo base_url()?>logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Search box -->
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li <?php if ($pa1== 1 ) echo " class=\"active\""; ?>><a href="<?php echo base_url()?>add_Patients"><i class="icon-add-contact"></i> Patients</a></li>
                    <li <?php if ($pa2== 1 ) echo " class=\"active\""; ?>><a href="<?php echo base_url()?>add_emptiyee"><i class="icon-briefcase"></i> Employee</a></li>
                    <li <?php if ($pa3== 1 ) echo " class=\"active\""; ?>><a href="<?php echo base_url()?>Statistics"><i class="icon-list-2"></i> Hospital Data</a></li>
                    
                </ul>
            </div>         
        </div>
<!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            	<div id="mws-error-page">
                    <h1>Error <span>404</span></h1>
                    <h5>Oopss... this is embarassing, either you tried to access a non existing page, or our server has gone crazy.</h5>
                    <p><a href="<?php echo base_url()?>add_Patients">click here</a> to go back home</p>
                </div>
            </div>
            <!-- Inner Container End -->

<br/> 
            <!-- Footer -->
            <div id="mws-footer" >
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
    </div>
   
</div>

    <!-- JavaScript Plugins -->
    <script src="<?php echo base_url()?>style/js/libs/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url()?>style/js/libs/jquery.mousewheel.min.js"></script>
    <script src="<?php echo base_url()?>style/js/libs/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url()?>style/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="<?php echo base_url()?>style/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="<?php echo base_url()?>style/jui/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url()?>style/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="<?php echo base_url()?>style/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url()?>style/plugins/flot/jquery.flot.min.js"></script>
    <script src="<?php echo base_url()?>style/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo  base_url()?>style/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url()?>style/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="<?php echo base_url()?>style/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="<?php echo base_url()?>style/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="<?php echo base_url()?>style/plugins/validate/jquery.validate-min.js"></script>
    <script src="<?php echo base_url()?>style/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="<?php echo base_url()?>style/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>style/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="<?php echo base_url()?>style/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="<?php echo base_url()?>style/js/demo/demo.dashboard.js"></script>

</body>
</html>