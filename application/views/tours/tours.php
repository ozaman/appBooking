<?php echo link_tag('files/css/animation.css'); ?>	
<?php echo link_tag('files/css/app-icon.css'); ?>
<script src="<?php echo base_url(); ?>files/js/tours.js" type="text/javascript"></script>	
<style>
.box_menu_tour{
	/*border: 2px solid #fff;
    /*background: #3b5998;
    color: #3C4858;
    font-size: 16px;
    padding: 8px;
    margin: 4px;*/
    /*border-radius: 50px;*/
    margin-bottom: 15px;
    text-align: center;
}
#first_pro_tour {
    list-style: none;
    padding-left: 0;
    font-size: 15px;
}
#first_pro_tour li{
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
</style>
<div style=" height: 100%;">
	<div class="container" style="background: #f9f9fb;">
        <div style="padding-top: 35px;">
            <h4 class="lng_select_province" style="    text-align: center;
    font-size: 20px;"></h4> 
            <ul id="first_pro_tour">
                                    
            </ul>
        </div>
	</div>
</div>



<div id="box_popup_tour">
           <div style="text-align:center; background: #3b5998;  padding: 5px;  color: #fff;  font-weight: 600;  text-align: center;">
           	<div class="btn_back_tour" onclick="closepopup('popprovince')">
    <i class="material-icons" style="">reply_all</i>
    <!-- <i class="fa fa-angle-double-left" style=""></i> -->
        <!-- <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_down</i> -->
    </div>
    			<!-- <i class="material-icons" onclick="closepopup('popprovince')" style="position: absolute; right: 15px;top: 15px">close</i> -->
               <h4 class="lng_select_province"></h4>               
           </div>
          
            <div style="height: 90vh;overflow-y: scroll; -webkit-overflow-scrolling: touch;">
                <div class="col-md-12 col-sx-12">  
                    <div class="" id="">
                        <ul id="pro_tour">
                            		
                        </ul>
                            	
                    </div>
				</div>
			</div>
</div>
<div id="box_popup_typetour">
           <div style="text-align:center;   padding: 5px;    font-weight: 600;  text-align: center;">
            <div class="btn_back_tour" onclick="closepopup('poptypetour')">
    <i class="material-icons" style="">reply_all</i>
    <!-- <i class="fa fa-angle-double-left" style=""></i> -->
        <!-- <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_down</i> -->
    </div>
                <!-- <i class="material-icons" onclick="closepopup('popprovince')" style="position: absolute; right: 15px;top: 15px">close</i> -->
               <h4 class="lng_select_type"></h4>               
           </div>
          
            <div style="height: 90vh;overflow-y: scroll; -webkit-overflow-scrolling: touch;">
                <div class="col-md-12 col-sx-12">  
                    <div style="padding-top: 15px;display: nones" class="gettype">
            <!-- <div  class="lng_product_category" style="    text-align: center;
    padding-bottom: 40px;
    font-size: 18px;
    font-weight: 500;"></div> -->
            <!-- <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Day Tour')" style="border-top: 3px solid #00bcd4;">
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                        
                            <i class="demo-icon icon-new-uniF100-1" style="font-size: 45px;color: #00bcd4;"></i>
                        <div><span class="lng_day_tour" style="font-size: 15px;color: #00bcd4;"></span></div>
                    </div>
                        </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="box_menu_tour"  onclick="gettypetour('Spa')" style="border-top: 3px solid #ff9800;">
                                            <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF10A-4" style="font-size: 45px;color: #ff9800;"></i>
                        <div><span class="lng_spa" style="font-size: 15px;color: #ff9800;"></span></div>
                    </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Boat')" style="border-top: 3px solid #3b5998;">
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF118-9" style="font-size: 45px;color:#3b5998 "></i>
                        <div><span class="lng_boat" style="font-size: 15px;color:#3b5998 "></span></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Wedding')" style="border-top: 3px solid #e91e63;    "> 
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF11E-8" style="font-size: 45px;color:#e91e63 "></i>
                            <div><span class="lng_wedding" style="font-size: 15px;color:#e91e63"></span></div>
                        </div>
                        </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Diving')" style="border-top: 3px solid #ff9800; ">
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF11F-6" style="font-size: 45px;color: #ff9800;"></i>
                        <div><span class="lng_diving" style="font-size: 15px;color: #ff9800;"></span></div>
                    </div>
                        </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Golf')" style="border-top: 3px solid #3b5998;">
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF114-4" style="font-size: 45px;color:#3b5998 "></i>
                        <div><span class="lng_golf" style="font-size: 15px;color:#3b5998"></span></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Package')" style="border-top: 3px solid #e91e63;">
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF12C-10" style="font-size: 45px;color: #e91e63"></i>
                        <div><span class="lng_package" style="font-size: 15px;color: #e91e63"></span></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box_menu_tour" onclick="gettypetour('Show')" style="border-top: 3px solid #00bcd4; ">
                    <div style="height: 125px;padding: 30px 15px;    background: #fff;">
                            <i class="demo-icon icon-new-uniF154-6" style="font-size: 45px;color: #00bcd4"></i>
                        <div><span class="lng_show" style="font-size: 15px;color: #00bcd4"></span></div>
                        </div>
                    </div>
            </div> -->
            <!-- <table width="100%">
                <tr>
                    <td align="center" colspan="3">
                        <div  class="lng_product_category" style="padding-bottom: 15px; font-size: 18px; font-weight: 500;"></div>
                    </td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Day Tour')" style="    background: #00bcd4;">
                            <i class="demo-icon icon-new-uniF100-1" style="font-size: 30px;"></i>
                        <div><span class="lng_day_tour"></span></div>
                        </div>
                        
                    </td>
                    <td width="10px"></td>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour"  onclick="gettypetour('Spa')" style="background: #ff9800;">
                            <i class="demo-icon icon-new-uniF10A-4" style="font-size: 30px;"></i>
                        <div><span class="lng_spa"></span></div>
                    </div>
                        
                    </td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Boat')">
                            <i class="demo-icon icon-new-uniF118-9" style="font-size: 30px;"></i>
                        <div><span class="lng_boat"></span></div>
                        </div>
                        
                    </td>
                    <td width="10px"></td>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Wedding')" style="    background: #e91e63;"> 
                            <i class="demo-icon icon-new-uniF11E-8" style="font-size: 30px;"></i>
                            <div><span class="lng_wedding"></span></div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Diving')" style="background: #ff9800;">
                            <i class="demo-icon icon-new-uniF11F-6" style="font-size: 30px;"></i>
                        <div><span class="lng_diving"></span></div>
                        </div>
                        
                    </td>
                    <td width="10px"></td>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Golf')">
                            <i class="demo-icon icon-new-uniF114-4" style="font-size: 30px;"></i>
                        <div><span class="lng_golf"></span></div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Package')" style="    background: #e91e63;">
                            <i class="demo-icon icon-new-uniF12C-10" style="font-size: 30px;"></i>
                        <div><span class="lng_package"></span></div>
                        </div>
                        
                    </td>
                    <td width="10px"></td>
                    <td width="50%" style="text-align: center;">
                        <div class="box_menu_tour" onclick="gettypetour('Show')" style="    background: #00bcd4;">
                            <i class="demo-icon icon-new-uniF154-6" style="font-size: 30px;"></i>
                        <div><span class="lng_show"></span></div>
                        </div>
                    </td>
                </tr>
            </table> -->
            
        </div>
                </div>
            </div>
</div>


<div id="box_popup_tourdetail">
           <div style="text-align:center;  padding: 5px;   font-weight: 600;  text-align: center;">
    			<!-- <i class="material-icons" onclick="closepopup('poptourdetail')" style="position: absolute; right: 15px;top: 15px">close</i> -->
    			<div class="btn_back_tour" onclick="closepopup('poptourdetail')">
    <i class="material-icons" style="">reply_all</i>
    <!-- <i class="fa fa-angle-double-left" style=""></i> -->
        <!-- <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_down</i> -->
    </div>
               <h4 class="lng_details"></h4>               
           </div>
          
            <div style="margin-top: 10px;">
                <div class="col-md-12 col-sx-12" style="overflow-y: scroll;
    height: 90vh;    -webkit-overflow-scrolling: touch;">  
                	<div class="card" style="border-radius: 15px; padding: 15px 0;"> 
                                <div style="padding: 0 15px; font-size: 16px;">
                                    <span id="productdetail" style="text-align: center;"></span>
                                </div>
                                                              
                            </div>
                            <div style="padding: 10px 4px; font-weight: 600; font-size: 16px;">
                                <span class="lng_gallery">Gallery</span>
                            </div>
                	<div class="card" id="" style="border-radius: 15px; font-size: 15px;">
                		<div class="w3-content w3-display-container" id="mySlides">
						 <!--  <img class="mySlides" src="img_fjords.jpg" style="width:100%">
						  <img class="mySlides" src="img_lights.jpg" style="width:100%">
						  <img class="mySlides" src="img_mountains.jpg" style="width:100%">
						  <img class="mySlides" src="img_forest.jpg" style="width:100%"> -->

						  
						  <div class="w3-button w3-black w3-display-right" style="    position: absolute;
    right: 10px;
    bottom: 15vh;
    font-size: 30px;
    color: #fff;
    border-radius: 7px;" onclick="plusDivs(1)">&#10095;</div>
    <div class="w3-button w3-black w3-display-left" style="position: absolute;
    left: 10px;
    bottom: 15vh;
    font-size: 30px;
    color: #fff;
    border-radius: 7px;" onclick="plusDivs(-1)">&#10094;</div>
						</div>
            		</div>
            		<div style="padding: 10px 4px; font-weight: 600; font-size: 16px;">
                                <span class="lng_active_service">Open</span>
                            </div>
                    <div class="card" id="" style="border-radius: 15px; padding: 15px 0; font-size: 15px;">
                    	<!-- <div style="font-size: 16px; font-weight: 400; padding: 15px;">Open</div> -->
                        <ul id="open_tour">
                           <!--  <li>Sunday</li>		
                            <li>Monday</li>		
                            <li>Tuesday</li>		
                            <li>Wednesday</li>		
                            <li>Thursday</li>		
                            <li>Friday</li>		
                            <li>Saturday</li>	 -->	
                        </ul>
                            	
                    </div>
                    <div style="padding: 10px 4px; font-weight: 600; font-size: 16px;">
                                <span class="lng_product_details"></span>
                            </div>
                    <div class="card" style="border-radius: 15px; padding: 15px 0;"> 
                                <div style="padding: 0 15px; font-size: 16px;">
                                	<!-- <div style="font-size: 16px;
    font-weight: 500;
    color: #333;
    margin-bottom: 15px;">Detail view</div> -->
                                    <span id="productdetailview" style=""></span>
                                </div>
                                                              
                            </div>
				</div>
			</div>
</div>

<div id="box_popup_touritem">
           <div style="text-align:center;   padding: 5px; font-weight: 600;  text-align: center;">
           	<div class="btn_back_tour" onclick="closepopup('poptouritem')">
    <i class="material-icons" style="">reply_all</i>
    <!-- <i class="fa fa-angle-double-left" style=""></i> -->
        <!-- <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_down</i> -->
    </div>
    			<!-- <i class="material-icons " onclick="closepopup('poptouritem')" style="position: absolute; right: 15px;top: 15px">close</i> -->
               <h4 class="headertour"></h4>               
           </div>
          
            <div style="height: 90vh;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;">
               
                    
                        <div id="pro_tour_item">
                            		
                        </div>
                            	
                   
				
			</div>
</div>

<!-- VIRW BOOK -->
<div id="get_html_book_tours" style="display: none;">
    <div class="get_html_pop_in_tours">               
        <div class="get_html_pop_ln_tours">
        <div class="btn_back_tour">
    <i class="material-icons" style="">reply_all</i>
    <!-- <i class="fa fa-angle-double-left" style=""></i> -->
        <!-- <i class="material-icons" style="color: rgb(22, 179, 177); font-size: 35px;">keyboard_arrow_down</i> -->
    </div>
            <div class="col-md-12 ">
            <?php include "Tourbook.php"; ?>
        </div>
        </div>            
    </div>
</div>

<div id="acceptance_pin_pop" style="">
            <div class="acceptance_pin_pop_in">               
                <div class="acceptance_pin_pop_ln">
                    <div class="lng_please_accept" style="text-align: center; font-size: 18px;"></div>
                    <!-- <input type="text" class="textInput" placeholder="New name" id="newname" name="newname" onchange="newname(newname)" > -->
                    
                    <div style="text-align: center;
                    margin-top: 25px;">
                    <!-- <div class="lng_find_again btn-close" style="background-color: #f44336;
                    width: 120px;
                    padding: 10px 0px;
                    font-size: 15px;
                    color: #FFF;
                    text-align: center;
                    display: inline-block;
                    border-radius: 25px;
                    margin-right: 15px;
                   " onclick="btn_no_position()">Edit route</div> -->
                    <div class="lng-close icon-close" style="    width: 100%;
                    padding: 10px 0px;
                    font-size: 15px;
                    background-color: #3b5998;
                    color: #FFF;
                    text-align: center;
                    display: inline-block;
                    border-radius: 25px;
                   
                    bottom: 14px;
                    right: 125px;" >Correct</div>
                    </div>
                    
                </div>        
            
            </div>
        </div>

<style>
#acceptance_pin_pop{
                z-index: 301;
                position: fixed;
                width: 100vw;
                height: 100vh;
                left: 0;
                top: 0;
                background: rgba(0, 0, 0, 0.59);
                display: none;
                /* pointer-events: none; */
            }
            .acceptance_pin_pop_in{
               /* height: 220px; */
                /* border-radius: 4px; */
                background: #fff;
                min-width: 80vw;
                /* height: auto; */
                left: 50vw;
                top: 50vh;
                transform: translate(-50%,-50%);
                position: fixed;
                z-index: 10;
                border-radius: 15px;
            }
            .acceptance_pin_pop_ln{
                padding: 20px;
                pointer-events: auto;
            }
.mySlides{
	border-radius: 15px;
}
/*#mySlides img:first-child {
	display: block;
}*/
.a-link-item2 {
    width: 100%;
    /* padding-top: 20px; */
    /* min-height: 280px; */
    /* margin-top: 0px; */
    margin-bottom: 10px;
    /* border-radius: 15px; */
    /* border-bottom: 1px solid #999; */
    padding: 10px;
    box-shadow: 2px 5px 7px 2px rgba(0, 0, 0, 0.15);
    /* background: #f5f5f5; */
}
.a-link-item2 h2 {
        /* position: relative; */
        /* font-size: 17px; */
        /* margin-left: 14%; */
        width: 100%;
            margin-top: auto;
        /* margin-top: 15px; */
        font-size: 15px !important;
        font-weight: 500;
    }
.numutour{
	    left: 10px;
	position: absolute;
    /* background-image: url(https://dotdotdottrip.com/files/images/icon_searchresult13.png); */
    /* background-repeat: no-repeat; */
    /* width: 49px; */
    /* height: 25px; */
    background: #ffffff;
    border-radius: 8px 0;
    /* font-family: tahoma; */
    font-weight: bold;
    border: 1px solid #3b5998;
    font-size: 13px;
    color: #3b5998;
    padding: 5px;
}
.btn_back_tour{
	display: block;text-align: center;
    left: 9vw;
    overflow: hidden;
    transform: translate(-50%, -50%);
    
    top: 30px;
    /* z-index: 200; */
    width: 38px;
    height: 38px;
    border-radius: 100%;
    box-shadow: #3b5998 0px 1px 4px;
    z-index: 262;
    cursor: pointer;
    position: absolute;
    padding: 8px;
    background: rgb(255, 255, 255);
    color: #3b5998;
    font-size: 30px;
}
#box_popup_touritem{
	display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: #fff;
    overflow: hidden;
    z-index: 101;
}
#box_popup_tourdetail{
	display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: #ddd;
    overflow: hidden;
    z-index: 102;
}
#box_popup_tour{
	display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: #fff;
    overflow: hidden;
    z-index: 100;
}
#box_popup_typetour{
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: #fff;
    overflow: hidden;
    z-index: 100;
}
#pro_tour{
	list-style: none;
    padding-left: 0;
    font-size: 15px;
}
#pro_tour li{
	padding: 15px;
    border-bottom: 1px solid #ddd;
    list-style: none;
}
#get_html_book_tours{
    z-index: 300;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.59);
                /* display: none; */
}
.get_html_pop_in_tours{
    /* height: 220px; */
    max-height: 100vh;
    /* border-radius: 4px; */
    background: #ddd;
    min-width: 100vw;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 10;
    /* border-radius: 15px; */
}
.get_html_pop_ln_tours{
    /*padding: 15px;*/
    height: 100vh;
    overflow: scroll;
    /*padding-bottom: 51px;*/
}
.item-thumimage {
    display: inline-block;
    float: left;
    width: 180px;
    height: 150px;
    border-radius: 15px;

}
.item-thumimage img {
    width: 100%;
    height: 100%;
    border-radius: 15px;
}
#i-listtour {
    /*float: right; */
    /* right: 15px; */
    /* position: absolute; */
    border: 1px solid #3b5998;
    font-size: 15px;
    text-align: center;
    width: 82px;
    color: #333;
    /* height: 85px; */
    border-radius: 15px;
    cursor: pointer;
}
.sala{
    color: #89be48;
}
</style>