
            

        </div>
        <div id="police_pop" style="display: none;">
            <div class="police_pop_in">               
                <div class="police_pop_ln">
                <!-- <i class="material-icons" id="close_get_history" style="position: absolute;top: 10px; right: 15px;">close</i> -->
                    <div class="lng_calling_police" style="text-align: center; font-size: 18px;font-weight: 400; margin-bottom: 20px;"></div>
                    <!-- <input type="text" class="textInput" placeholder="<? echo $newname;?>" id="newname" name="newname" onchange="newname(newname)" > -->
                    <div class="lng_really_need" style="text-align: center; font-size: 15px;font-weight: 400; margin-bottom: 20px;"></div>
                   
                    <div class="lng_police_now" style="background: #f44336;
                    /* text-transform: uppercase; */
                    text-align: center;
                    color: #fff;
                    /* position: absolute; */
                    right: 15px;
                    padding: 12px 20px;
                    bottom: 15px;    border-radius: 15px;    border-radius: 15px;"></div>
                    <div class="lng_canceled" style="
                    /* text-transform: uppercase; */
                    text-align: center;
                    color: #333;
                    /* position: absolute; */
                    right: 15px;
                    padding: 12px 20px;
                    bottom: 15px;    border-radius: 15px;"></div>
                    <!-- <ul id="list_history" >

                    </ul> -->
                    
                    
                    
                </div>        
            
            </div></div>
    </section>


    <footer class="footer footer-white" style="display: none;">
        <div class="container" style="border-top: 1px solid #C8E1F5;">
            <!-- <a class="footer-brand" href="http://www.creative-tim.com">Material Kit PRO</a> -->

            <ul class="pull-left">
                <li>
                    <a href="http://www.creative-tim.com/" target="_blank">
                        Contacts
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com/" target="_blank">
                       About Us
                    </a>
                </li>
               
            </ul>

            <ul class="social-buttons pull-right">
                <li>
                    <a href="https://twitter.com/" target="_blank" class="btn btn-just-icon btn-simple btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank" class="btn btn-just-icon btn-simple btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank" class="btn btn-just-icon btn-simple btn-instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>

        </div>
    </footer>

    
<div class="box-menu-select">
    <table width="100%">
        <tr>
            <td width="20%" style="/*border-right: 1px solid #555;*/">
                <div class="btn-realtime" style="" >
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;">room</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-now-use" style="font-size: 13px;"></span>
                            </td>
                        </tr>
                    </table>
                   
                </div>
            </td>
            <td width="20%" style="/*border-right: 1px solid #555;*/">
                <div class="btn-reservation" style=" ">
                <table width="100%">
                        <tr>
                            <td align="center">
                                <i class="material-icons" style="font-size: 30px;" style="">search</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-advance-use" style="font-size: 13px;"></span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="20%" style="/*border-right: 1px solid #555;*/">
                <div class="btn-car-service" style="" >
                <table width="100%">
                        <tr>
                            <td align="center">
                            <i class="material-icons" id="car-service" style="font-size: 30px;">directions_car</i>
                            <!-- <i class="material-icons" id="iconhome" style="font-size: 30px;">home</i>  -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                            <span class="lng-car-service" style="font-size: 13px;">Car service</span>
                            </td>
                        </tr>
                    </table>
                   
                   
                </div>
            </td>
            <td width="20%" >
                <div class="btn-management" style=" " >
                    <table width="100%">
                        <tr>
                            <td align="center">
                            <!-- <i class="material-icons" style="font-size: 30px;">settings</i> -->
                                
                                <i class="material-icons" style="font-size: 30px;">dvr</i>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <span class="lng-management" style="font-size: 13px;">My Booking</span>
                            </td>
                        </tr>
                    </table>
                </div> 
            </td>
        </tr>
    </table>
 </div>
 <style>
     .police_pop_ln{
                padding: 15px;
            }
            #police_pop{
                z-index: 9999;
                position: fixed;
                width: 100vw;
                height: 100vh;
                left: 0;
                top: 0;
                background: rgba(0, 0, 0, 0.59);
                /* display: none; */
            }
            .police_pop_in{
                /* height: 220px; */
                max-height: 95vh;
                /* border-radius: 4px; */
                background: #fff;
                min-width: 90vw;
                /* height: auto; */
                left: 50vw;
                top: 50vh;
                transform: translate(-50%,-50%);
                position: fixed;
                z-index: 10;
                border-radius: 15px;
            }
            .police_pop_ln{
                padding: 15px;
            }
.btn-reservation {
    line-height: 0.8;
    /* padding: 8px 0; */
    font-size: 16px;
    /* font-weight: 400; */
    /* position: absolute; */
    width: 100%;
    /* border-radius: 4px; */
    /* padding: 12px; */
    color: #333;
    text-align: center;
    /* display: inline-block; */
    /* background-color: #2196f3; */
    z-index: 1;
}

.btn-realtime {
    line-height: 0.8;
    /* padding: 8px 0; */
    font-size: 16px;
    /* font-weight: 400; */
    /* position: absolute; */
    width: 100%;
    /* border-radius: 4px; */
    /* padding: 12px; */
    color: #333;
    text-align: center;
    /* display: inline-block; */
    /* background-color: #2196f3; */
    z-index: 1;
}

.btn-home {
    padding: 8px 0;
    font-size: 16px;
    /* font-weight: 400; */
    /* position: absolute; */
    width: 100%;
    /* border-radius: 4px; */
    /* padding: 12px; */
    color: #16B3B1;
    text-align: center;
    /* display: inline-block; */
    /* background-color: #2196f3; */
    z-index: 1;
}

.btn-management {
    line-height: 0.8;
    padding: 8px 0;
    font-size: 16px;
    /* font-weight: 400; */
    /* position: absolute; */
    width: 100%;
    /* border-radius: 4px; */
    /* padding: 12px; */
    color: #fff;
    text-align: center;
    /* display: inline-block; */
    background-color: #3b5998;
    z-index: 1;
}
.btn-car-service{
line-height: 0.8;
    padding: 8px 0;
    font-size: 16px;
    /* font-weight: 400; */
    /* position: absolute; */
    width: 100%;
    /* border-radius: 4px; */
    /* padding: 12px; */
    color: #333;
    text-align: center;
    /* display: inline-block; */
    /* background-color: #2196f3; */
    z-index: 1;
}
 </style>
    <!--     *********    END PRICING 5      *********      -->
</body>

<!--
 <script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time()?>"></script> -->

<script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer-time.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script> 
    
    
    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
  <script src="<?php echo base_url(); ?>files/js/moment.min.js"></script>

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script src="<?php echo base_url(); ?>files/js/nouislider.min.js" type="text/javascript"></script>

    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-tagsinput.js"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script src="<?php echo base_url(); ?>files/js/jasny-bootstrap.min.js"></script>
     <!--  Plugin for the Wizard -->
     <script src="<?php echo base_url(); ?>files/assets/js/jquery.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="<?php echo base_url(); ?>files/assets/js/jquery.validate.min.js"></script>
    <!--    Plugin For Google Maps   -->
    <!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->

    <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
    <script src="<?php echo base_url(); ?>files/js/atv-img-animation.js" type="text/javascript"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script src="<?php echo base_url(); ?>files/js/material-kit.min.js?v=1.1.1" type="text/javascript"></script>

    <!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery.sharrre.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>files/js/book-script.js"></script>  -->
  <script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time();?>"></script>
    
<!--    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/main-script.js?v=<?=time();?>"></script> -->
 
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

<div id="loading" style="display: none;">
            <div class="loading-in">               
                <div class="loading-ld">
                    <div style="font-size: 15px">Loading</div>
                        <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i></div>
                
                    </div>        
                </div>


<script>
// if($.cookie("lng")=="en"){
// var title_logout = "Logout ?";
// var text_logout = "Do you want to logout?";

// }else if($.cookie("lng")=="cn"){
// var title_logout = "登出 ?";
// var text_logout = "คุณต้องการออกจากระบบ ?";
// }else if($.cookie("lng")=="th"){
// var title_logout = "ออกจากระบบ ?";
// var text_logout = "你要退出吗？";
// }else if($.cookie("lng")==undefined){
// var title_logout = "Logout ?";
// var text_logout = "Do you want to logout?";
// }
if ($.cookie("lng") == "en") {
    var title_logout = "Logout ?";
    var text_logout = "Do you want to logout?";
    var yes = "Yes";
    var cancel = "Cancel"
} else if ($.cookie("lng") == "cn") {
    var title_logout = "登出 ?";
    var text_logout = "您需要注销 ?";
    var yes = "是";
    var cancel = "取消";
} else if ($.cookie("lng") == "th") {
    var title_logout = "ออกจากระบบ ?";
    var text_logout = "คุณต้องการออกจากระบบหรือไม่?";
    var yes = "ใช่";
    var cancel = "ยกเลิก";
} else if ($.cookie("lng") == undefined) {
    var title_logout = "Logout ?";
    var text_logout = "Do you want to logout?";
    var yes = "Yes";
    var cancel = "Cancel";
}
   
var base_url = 'https://www.welovetaxi.com/app/booking2/';
$( document ).ready(function() {
    $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
           
        }, 3000);
    $.post( "<?php echo base_url(); ?>dashboard/get_user", function( data ) {
		var obj = JSON.parse(data);
		$.each(obj, function (index, value) {
			$('#name').html(obj[index].s_name);
		});
	});
	$('#btn-logout-user').on('click', function() {
		
        swal({
            title: '' + title_logout + '',
            text: '' + text_logout + '',
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: yes,
            cancelButtonText: cancel,
            closeOnConfirm: false
        },
function(){
	console.log('logout');
        $.removeCookie("login");
       
  		 window.location.href = base_url + "register";
  
});
        
    });
	$('.box-polic').click( function() {        
         $('html').removeClass('nav-open');
         setTimeout(function() {
             $toggle.removeClass('toggled');
             $('#bodyClick').remove();
             $('.navbar-toggle').css('display', 'block');
         }, 250);
         $('#police_pop').show(500);        
	});
	$('.lng_canceled').click( function() {
         $('#police_pop').hide();
    });
	if ($.cookie("login")) {
        console.log($.cookie("login"))
            //        alert(base_url+'getuser_control/mainpage');
        $.ajax({
            type: 'POST',
            url: '../getuser_control/mainpage',
            data: { 'id': $.cookie("login") },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                console.log(data[0].s_image)
                $('.box-login').show();
                $('.box-login-non').hide();
                $('.box-desboard').show();


                if (data[0].s_image == '') {
                    $('#photo_profile').html('<img class="" src="' + base_url + 'pic/default-avatar.png">');
                    $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');


                } else {
                    $('#photo_profile').html('<img   src="' + base_url + 'pic/' + data[0].s_image + '">');
                    $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/' + data[0].s_image + '">');

                }
                $('#usernamess').html(data[0].s_username);
                $('#getname').html(data[0].s_name);

                //$('#textlogout').html("Logout")
                $('#btnlogin').css('display', 'none')
                $('#btnuser').css('display', 'block')
                $('.caret').css('display', 'inline-block')
            }
        });

    } 

	else {
        $('#photo_non-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');
        $('.box-login').hide();
        $('.box-desboard').hide();

        $('.box-login-non').show();
        //$('#usernamess').html("Login")
        // $('#textlogout').html("Login/Register")
        $('#btnlogin').css('display', 'block')
        $('#btnuser').css('display', 'none')
        $('.caret').css('display', 'none')
	
	
}

	});


</script>

<!--<form name="realtime" id="realtimeAction" action="<?php echo base_url(); ?>" method="POST" style="display: nones;">
<input type="hidden"  name="active" value="realtime"/>
</form>
<form name="reservation" id="reservationAction" action="<?php echo base_url(); ?>" method="POST" style="display: nones;">
<input type="hidden"  name="active" value="reservation"/>
</form>
<form name="service" id="serviceAction" action="<?php echo base_url(); ?>" method="POST" style="display: nones;">
<input type="hidden"  name="active" value="service"/>
</form>-->
<script>
$( document ).ready(function() {
	
	$('.btn-car-service').click(function(){

    		window.location.href = '<?php echo base_url(); ?>?section=service';

    		
    });
    $('.btn-realtime').click(function(){

    		window.location.href = '<?php echo base_url(); ?>?section=realtime';

			
    });
    $('.btn-reservation').click(function(){
  		
    	window.location.href = '<?php echo base_url(); ?>?section=reservation';
//			$( "#reservationAction" ).submit();
    });
    $('.btn-management').click(function(){
    		window.location.href = '<?php echo base_url(); ?>dashboard/view_user';
    });
	
	
	$('.navbar-collapse .feed').click( function(){
//		alert(123);
		$('#loading').css('display', 'block');
	    $('#content').css('display', 'none');
	    setTimeout(function() {
//	        console.log("aaaaa")
	        $('#loading').css('display', 'none');
	        $('#content').css('display', 'block');
	    }, 3000);
				
	});
	
});	
</script>



</html>