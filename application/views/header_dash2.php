<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Booking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Canonical SEO -->

    <?php echo link_tag('files/css/bootstrap3.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
 <!--    <?php echo link_tag('dasboard/material-dashboard.css'); ?>-->
    
    <?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/material-bootstrap-wizard.css'); ?>
    
    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php //echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

  
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>

 <!-- Sweet Alert 2 plugin -->
	<script src="<?php echo base_url(); ?>dasboard/sweetalert-master/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/sweetalert-master/dist/sweetalert.css">

</head>
 <style>
.grad1 {
	height: 200px;
    background: red;
    background: -webkit-linear-gradient(left top, red, yellow);
    background: -o-linear-gradient(bottom right, red, yellow);
    background: -moz-linear-gradient(bottom right, red, yellow);
    background: linear-gradient(to bottom right, rgb(255, 255, 255), rgba(72, 240, 255, 0.68));
}
.box-menu-select {
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 25;
    background: #fff;
    box-shadow: 0px 10px 5px #888, 0px 0px 5px rgba(136, 136, 136, 0.52);



    /* height: 90px; */
}
	.loading-in{
    height: 115px;
    /* border-radius: 4px; */
    background: #fff;
    min-width: 15rem;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 10;
    border-radius: 25px;
}
.loading-ld{
    font-weight: 500;
    color: #000;
    padding: 35px;
    text-align: center;
    
}
#loading{
    z-index: 9999;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.59);
    display: nones;
}
</style>

<div id="loading" style="display: nones;">
            <div class="loading-in">               
                <div class="loading-ld">
                    <div style="font-size: 15px">Loading</div>
                        <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i></div>
                
                    </div>        
                </div>
<body class="presentation-page" style="background-color: #fff; ">

    <style>
        .page-header .container {
    padding-top:0;
    color: #000;
    background-color: #fff;
    border-bottom: 1px solid #C8E1F5;
}
.navbar.navbar-transparent{
    background-color: #fff;
    color: #000;
    border-bottom: 1px solid #C8E1F5;
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 12px -5px rgba(33, 33, 33, .46);
}
.navbar {
    box-shadow: none;
}

    </style>
<style>
	.li_active {
	z-index: 2;
    color: #000000;
    background-color: #00bcd4;
	}
	.imgmemu{
	 width: 30px;
    height: 30px;
    border-radius: 50px;
    }
    
</style>
  <!-- navbar-transparent-->
   <nav class="navbar navbar-default  navbar-transparent navbar-fixed-top navbar-color-on-scroll" id="sectionsNav">
    	<div class="container" >
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header" >
        	<div class="" style="    /* padding: 9px 10px; */
            margin-top: 12px;
            margin-left: 15px;
            /* margin-bottom: 8px; */
            font-size: 25px;
            display: inline-block;">
                        <div class="box-login-non">
                  
                       <i class="material-icons btn-login" style="    position: absolute;">account_circle  </i>
                        <span style="    margin-left: 30px;
    font-size: 15px;" class="lng-login"></span>
</div>
                 
                    <!-- <div class="box-login" style="width: 35px;  height: 35px; border-radius: 50px;  margin-top: -4px;">
                        
                    </div> -->
                </div>
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		
        	</div>
<script>

$( document ).ready(function() {
   var pathname = window.location.pathname; // Returns path only
	var url      = window.location.href;     // Returns full URL
	$('ul li[class="li_active"]').removeClass();
	
	var id ;
	
	if(pathname=="/dashboard/account_settings"){
		id = "#account";
	}else if(pathname=="/dashboard/view_user") {
		id = "#view_user";
	}else if(pathname=="/dashboard/playment") {
		id = "#playment";
	}
	$(id).addClass('li_active');
});
</script>
        	<div class="navbar-collapse" style="
    margin-top: 10px;
">            
        		    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" id="btnuser">
                            <div class="user">
                                <div class="photo" id="photo_profile" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
                                </div>                   
                            </div>
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <div id="usernamess"></div>                             
                                <!-- <b class="caret"></b> -->
                            </a>
                            <!-- <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="" >
                                    <i class="material-icons">contacts</i><span class="lng-settings-account"></span>
                    
                                    </a>
                                </li>
                                 <ul class="dropdown-menu dropdown-with-icons">
                                
                               <li class="box-setting">
                            <a href="<? echo base_url(); ?>dashboard/account_settings" class="feed">
                             
                                <i class="material-icons">settings</i><span style="text-transform: initial;" class="lng-sa_d textmenu">Settings Account</span>                  
                            </a>
                        </li>
                        
                            </ul> -->
                               <!--  <li id="btn-logout-user">
                                    <a>
                                        <i class="material-icons">power_settings_new</i><span class="lng-logout"></span>
                    
                                    </a>
                                </li>
                        
                            </ul> -->
                        </li>
                        <li class="dropdown" id="btnlogin">
                            <div class="user">
                                <div class="photo" id="photo_non-login" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
                                </div>                   
                            </div>
                           
                            
                        </li>       				
                        <!-- <li id="btnlogin">
                            <a href="<?php echo base_url(); ?>register">
                                <i class="material-icons">account_circle</i>
                                <span class="lng-login"></span><span> / </span><span class="lng-register"></span>                        
                            </a>
                        </li> -->
                       <!-- <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                 <div style="width: 100%;text-align: center;"> 
                                <i class="material-icons">shopping_basket</i><span style="text-transform: initial;" class="lng-product textmenu"></span>
                                
                                <b class="caret"></b>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="<?php echo base_url(); ?>" class="feed" >
                                        <i class="material-icons">directions_car</i><span class="lng-transports textmenu"></span>                    
                                    </a>
                                </li>                            
                                 <li id="btn-logout-user">
                                    <a href="<?php echo base_url(); ?>tour">
                                        <i class="material-icons">style</i><span class="lng-tours textmenu"></span>                    
                                    </a>
                                </li>                         
                            </ul>
                        </li>-->
                        <li class="box-desboard">
                            <a href="<?php echo base_url(); ?>dashboard/view_user" class="feed">
                            <i class="material-icons" >dvr</i>
                            <span style="text-transform: initial;" class="lng-management textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <li class="box-notifications">
                            <a  class="notifications_link">
                            <i class="material-icons" style="font-size: 22px;">notifications_active</i>
                            <span style="text-transform: initial;" class="lng_notifications textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <li class="box-drive">

                            <a href="https://www.welovetaxi.com/app/T-share/"  class="drive_link">
                            <i class="material-icons" style="font-size: 22px;">directions_car</i>
                            <span style="text-transform: initial;" class="lng_drive textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                         <li class="box-tour">

                            <a  href="<? echo base_url(); ?>tours" class="notifications_link">
                           <i class="material-icons" style="font-size: 22px;">business_center</i>
                            <span style="text-transform: initial;" class="lng_tours textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <li class="box-help">
                            <a  class="drive_link">
                            <i class="material-icons" style="font-size: 22px;">headset_mic</i>
                            <!-- <i class="material-icons" style="font-size: 22px;">directions_car</i> -->
                            <span style="text-transform: initial;" class="lng_help_center textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <li class="box-polic">
                            <a  class="polic_link">
                            <i class="material-icons" style="font-size: 22px;">phone_in_talk</i>
                            <!-- <i class="material-icons" style="font-size: 22px;">directions_car</i> -->
                            <span style="text-transform: initial;" class="lng_polic textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <!-- <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                              
                                <i class="material-icons">language</i><span style="text-transform: initial;" class="lng-language textmenu"></span>                                
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a  onclick="language('cn')" class="feed">
                                        <img src="<?php echo base_url(); ?>/files/img/china.ico" style="width: 30px;margin-right: 15px;">简体中文 
                                   </a>
                                </li>
                                <li>
                                    <a  onclick="language('en')" class="feed">
                                <img src="<?php echo base_url(); ?>/files/img/usa.ico" style="width: 30px;margin-right: 15px;">English 
                    
                                    </a>
                                </li>
                                <li>
                                    <a onclick="language('th')" class="feed">
                                <img src="<?php echo base_url(); ?>/files/img/thai.ico" style="width: 30px;margin-right: 15px;">ภาษาไทย
                    
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        	
                    </ul>
                    
                
                </div>
    	</div>
    	<style>
    	#loading{
    z-index: 9999;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.59);
    display: nones;
}
#usernamess{
    display: inline-block;
    text-transform: initial;
}
    	#sectionsNav {
    position: fixed;
    background: rgb(255, 255, 255) !important;
    margin: auto;
    z-index: 20;
    /*width: 100%;*/
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    background: #07c284;
    border-bottom: none;
}
    		.user {
    background: #3b5998;
    text-align: center;
    padding-bottom: 20px;
    /* margin: 25px auto 0; */
    position: relative;
    height: 160px;
   display:none;
}
.navbar-toggle{
	    background: #fff;
	
}
.user .photo {
    width: 100%;
    /* height: 110px; */
    overflow: hidden;
    border-radius: 4px;
    /* margin: 0 auto; */
    /* margin-top: 50px; */
    /* box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); */
}
.user .photo img {
    width: 50px;
    height: 50px;
    margin-top: 30px;
    border-radius: 50px;                       
}
@media screen and (max-width: 767px){
    .user {
        
        display:block;
    }
}
    	</style>
    </nav>
    
   
   
    
		