<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="">
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<title>Booking</title>
    <!-- <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name='viewport'>
	<script>
		// var base_url = '<?php echo base_url(); ?>';
	</script>
	<?php echo link_tag('files/css/bootstrap3.min.css'); ?>
	<!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->	
	<?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>	
	<?php echo link_tag('files/css/main.css?v='.time().'>'); ?>	
	<?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    <!--<?php //echo link_tag('files/css/load.css'); ?>-->
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <?php echo link_tag('files/css/swiper.css'); ?>	
    <?php echo link_tag('files/css/swiper.min.css'); ?>	
    <?php echo link_tag('files/css/classic.css?v='.time()); ?>	
    <?php echo link_tag('files/css/classic.date.css?v='.time()); ?>

</head>
<body class="presentation-page" style="overflow-x: hidden;" >
    <div id="loading">
        <div class="loading-in" >               
            <div class="loading-ld" >
                <div style="font-size: 15px">Loading</div>
                    <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i></div>
                
                </div>        
            </div>
        </div>
    </div>
    <div id="content" >
<!-- navbar -->
	    <nav class=" navbar" id="sectionsNav" >
    	    <div class="container" style="margin-bottom: 0 ">        
                <div class="navbar-header">
                    <div style="padding: 9px 10px; margin-top: 8px; margin-left: 15px; margin-bottom: 8px; font-size: 25px; display: inline-block;">
                        <div class="box-login-non" style="    border: 1px solid #3b5998;
    padding: 1px 5px;
    text-align: center;
    border-radius: 15px;">                  
                            <!-- <i class="material-icons btn-login" style="    position: absolute;">account_circle  </i> -->
                            <span style="font-size: 15px; pointer-events: auto;" class="lng-login"></span>
                        </div>                 
                        <!-- <div class="box-login" style="pointer-events: auto;width: 35px;  height: 35px; border-radius: 50px;  margin-top: -4px;">
                         
                        </div> -->
                    </div>                   
                    <button type="button" class="navbar-toggle" data-toggle="collapse" style="pointer-events: auto;background: rgba(255, 255, 255, 0) !important; color:#000 !important;;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                    </button>                   
                </div>
        	    <div class="navbar-collapse" style=" margin-top: 10px;pointer-events: auto;">            
        		    <ul class="nav navbar-nav navbar-right" style="  ">
                        <li class="dropdown" id="btnuser">
                            <div class="user">
                                <div class="photo" id="photo_profile" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
                                </div>                   
                            </div>
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <div id="usernamess"></div>                             
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                 <ul class="dropdown-menu dropdown-with-icons">                                
                                    <li class="box-setting">
                                        <a href="<? echo base_url(); ?>dashboard/account_settings" class="feed">
                                        <!--  <i class="material-icons">dashboard</i><span style="text-transform: initial;" class="lng-dashboard textmenu"></span>  -->
                                            <i class="material-icons">settings</i><span style="text-transform: initial;" class="lng-sa_d textmenu">Settings Account</span>                  
                                        </a>
                                    </li>                        
                                </ul>
                                <li id="btn-logout-user">
                                    <a>
                                        <i class="material-icons">power_settings_new</i><span class="lng-logout"></span>
                    
                                    </a>
                                </li>                        
                            </ul>
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
                            <i class="material-icons" style="font-size: 22px;">dvr</i>
                            <span style="text-transform: initial;" class="lng-management textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <li class="box-list">
                            <a  class="list_link">
                            <i class="material-icons" style="font-size: 22px;">av_timer</i>
                            <span style="text-transform: initial;" class="lng_list textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <li class="box-history">
                            <a  class="history_link">
                            <i class="material-icons" style="font-size: 22px;">star_rate</i>
                            <span style="text-transform: initial;" class="lng_favorites textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>
                        <!-- <li class="btn-management" >
                            <a  class="history_link">
                            <i class="material-icons" style="font-size: 22px;">dvr</i>
                            <span style="text-transform: initial;" class="lng-management textmenu"></span>
                                               
                            </a>
                        </li> -->
                        <li class="box-drive">
                            <a  href="<?php echo base_url(); ?>" class="drive_link">
                           <i class="material-icons">directions_car</i>
                            <span style="text-transform: initial;" class="lng_transport textmenu"></span>
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
                        <li class="box-notifications">
                            <a  class="notifications_link">
                            <i class="material-icons" style="font-size: 22px;">notifications_active</i>
                            <span style="text-transform: initial;" class="lng_notifications textmenu"></span>
                                <!-- <i class="material-icons">dashboard</i>                     -->
                            </a>
                        </li>

                        <li class="box-drive">
                            <a  class="drive_link">
                            <i class="material-icons" style="font-size: 22px;">directions_car</i>
                            <span style="text-transform: initial;" class="lng_drive textmenu"></span>
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
                        <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <div style="width: 100%;text-align: center;"> -->
                                <i class="material-icons" style="font-size: 22px;">language</i><span style="text-transform: initial;" class="lng-language textmenu"></span>                                
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
                        </li>
                        	
                    </ul>
                    
                    <!-- <div  style="position: absolute;
                    bottom: 0;
                    z-index: 2;
                    left: 0;
                    width: 100%;">
                            <div id="btn-logout-user" style="background: #e22526;
    color: #ffffff;
    text-align: center;
    font-size: 16px;
    padding: 10px;">
    <i class="material-icons" style="    position: absolute;
    margin-top: -3px;">power_settings_new</i>
                                <span class="lng-logout" style="margin-left: 34px;"></span>
                            </div>
                        
                        </div> -->
                </div>
                
    	    </div>
        </nav>

        <div id="codecountry" style="    z-index: 301;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100vw;
    height: 100vh;
    background: #fff; display: none;">
            <div class="" style="width: 100vw;
            position: fixed;
            z-index: 10;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
            height: 91vh;">
            <div class="" style="padding: 12px 15px 0;">
            <i class="material-icons" onclick="closepopup('country')" style="position: absolute;top: 15px; right: 15px;">close</i>
                       <!-- <i class="material-icons" data-dismiss="modal" style="position: absolute;top: 10px; right: 15px;">close</i> -->
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal"  style="display: nones;" >Close</button> -->
                        <div class="box-country">
                            <ul class="select-name"> </ul>
                        </div>
                    </div>
                <!-- <div style=""> -->
                    
                  

                   
                <!-- </div> -->
            </div>
        </div> 
        <style>
       
.index-page .page-header, .presentation-page .page-header {
    height:30vh;
    overflow: hidden;
}
.main-raised {
    margin: 0px 0 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    /* margin-bottom: 50px; */
}
#imgcountry{
    width: 25px;
    margin-right: 15px;
}
.modal .modal-dialog {
    /* margin-top: 10px !important; */
}
#box-image{
    width: 100%;
    border-radius: 15px;
    margin-top: 5px;
}
#images-icon{
    width: 200px;
    margin-bottom: 20px;
    
}
.box-country ul{
                        padding-left: 0;

                    }
                    .box-country ul li{
                        list-style: none;
                        padding: 8px 20px;
                    }
                    #span-phonecode{
                        padding-right: 10px;
                    }
                    .box-country ul li:hover{
                        background-color:#3b5998;
                        color: #000;
                    }
                    #textcountry{
                        color: #333;
                        text-align: center;
                    }
                    #code{
                        text-align: center;
                    }
                    label.form-control
                    {
                              padding: 5px 8px;
                       /* margin-top: 20px;*/
                    }
                    #calen{

                        z-index: 5;
                        margin-top: 1px;
                        margin-right: 15px;
                        position: absolute;
                        font-size: 20px;
                        color: #9E9E9E;
                    }
                    #usernamess{
                        display: inline-block;
                            text-transform: initial;
                    }

                     @media screen and (max-width: 767px){
                    


                    #textcountry{
                        text-align: left;
                    }
                     #code{
                        text-align: left;
                    }
                    #tphone{
                        padding: 0;
                    }
                    #images-icon{
                        width: 100%;
                        margin-bottom: 20px;
                        /*margin: auto;*/
                    }
                    #media-email{
                        margin-top: 20px;
                    }
                    #box-detail-price{
                        margin: 0;
                    }

                }

</style>
<style >
.navbar-right{
    /* background: #000; */
}
.textmenu{
    margin-left: 10px;
}
.imgmem-log{
    
}
.imgmemu{
    width: 35px;  
    height: 35px; 
    border-radius: 50px;  
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
#sectionsNav{
    position: absolute;
    background: rgba(255, 255, 255, 0) !important;
    margin: auto;
    z-index: 20;
    width: 100%;
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    pointer-events: none;
    /* background: #07c284; */
}
.loading-in{
    height: 115px;
    border-radius: 25px;
    background: #fff;
    min-width: 15rem;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    /* -ms-transform: translateY(-50%);
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-o-transform: translateY(-50%); */
/* -webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%); */
    -webkit-transform:translate(200%,200%); /* Safari and Chrome */
  /* transform: translate(-50%, -50%); */
  /* -webkit-transform: translate3d(-50%,-50%,0); */
    transform: translate(-50%,-50%);
    /* -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%); */
    position: fixed;
    z-index: 10;
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
#usernamess{
    display: inline-block;
    text-transform: initial;
}
.notification {
                    
    position: absolute;
    top: 2px;
    border: 1px solid #FFF;
        left: 22px;
    font-size: 9px;
    background: #f44336;
    color: #FFFFFF;
    min-width: 20px;
    padding: 0px 5px;
    height: 20px;
    border-radius: 10px;
    text-align: center;
    line-height: 19px;
    vertical-align: middle;
    display: block;
}
.dropdown-menu.dropdown-with-icons li>a:hover {
    /*padding: 12px 20px 12px 12px;*/
    background: #F44336 !important;
}
.dropdown-menu:after, .dropdown-menu-container:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid rgba(0,0,0,0);
    border-right: 11px solid rgba(0,0,0,0);
    content: "";
    display: inline-block;
    position: absolute;
    right: 30px;
    top: -10px;
}

@media screen and (max-width: 767px){
    .user {
        display:block;
    }
}
                    </style>
	<!-- <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>files/images/bg2.jpeg');"> -->
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>Material Kit
							<div class="pro-badge">
								Pro
							</div>
						</h1>

						<h3 class="title">Start Your Development With A Badass Bootstrap UI Kit inspired by Material Design.</h3>
					</div>
				</div>
			</div>
		</div> -->
	<!-- </div> -->


















