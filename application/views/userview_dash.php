<?php header('Content-type: text/html; charset=utf-8'); ?>

    <?php echo link_tag('files/css/classic.css'); ?>
    <?php echo link_tag('files/css/classic.date.css'); ?>
	 <script type="text/javascript" src="<?php echo base_url(); ?>files/js/picker.js?v=<?=time()?>"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/picker.date.js?v=<?=time()?>"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/legacy.js?v=<?=time()?>"></script> 
    <?
    $json = json_encode($results);
     ?>
      
<style>
 .confirm{
                text-align: center;
                background-color: rgb(35, 53, 91) !important;
                width: 100px !important;
                border-radius: 25px !important;
            }
            .cancel{
                padding: 10px 0 !important;
                text-align: center;
                background-color: #C1C1C1 !important;
                width: 100px !important;
                border-radius: 25px !important;
            }
.btn-close {
    /* width: 200px; */
/*    background: #4BB1C1;*/
    background: #3b5998;
    /* text-transform: uppercase; */
    text-align: center;
    color: #ffffff;
    border: 1px solid #3b5998;
    /* position: absolute; */
    right: 15px;
    padding: 12px 20px;
	bottom: 15px;
	border-radius: 25px;
}
.btn-silver
{
		    background-color: #777;
}
	
/* .modal-transparent */

.modal-transparent {
  background: transparent;
}
.modal-transparent .modal-content {
  background: transparent;
}
.modal-backdrop.modal-backdrop-transparent {
  background: #ffffff;
}
.modal-backdrop.modal-backdrop-transparent.in {
  opacity: .9;
  filter: alpha(opacity=90);
}

/* .modal-fullscreen */

.modal-fullscreen {
  background: transparent;
}
.modal-fullscreen .modal-content {
  background: transparent;
  border: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.modal-backdrop.modal-backdrop-fullscreen {
  background: #ffffff;
}
.modal-backdrop.modal-backdrop-fullscreen.in {
  opacity: .97;
  filter: alpha(opacity=97);
}

/* .modal-fullscreen size: we use Bootstrap media query breakpoints */

.modal-fullscreen .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .modal-fullscreen .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .modal-fullscreen .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .modal-fullscreen .modal-dialog {
     width: 1170px;
  }
}

</style>
<script>
$( document ).ready(function() {
    $( "#user_view" ).addClass( "active" );
    
    var base_url = '<?php echo base_url(); ?>';
    
//    console.log(<?=$json;?>);
    
$(window).scroll(function() {
	 var scrollTop = $(this).scrollTop();

	var check = $(document).height()/3;
//	console.log(check);
   if($(window).scrollTop() + $(window).height() >= $(document).height()-400) {
//       alert("bottom!");
		$('#top-end_btn').show(700);
   }
   if (scrollTop <= 200) {
   $('#top-end_btn').hide(700);
  }
//   console.log($(window).scrollTop()+" : "+$(window).height()+" : "+$(document).height());
});
    
});
</script>	
<?php 
   
    if(!$_COOKIE['lng']){
       // echo  $_COOKIE['lng'].'unde';
        $lng_search_order = 'Search by order (e.x. 7033496)';
        $paysuccess = 'Already paid';
        $pend = 'Pending';
        $norecord = 'No Record';
        $owe = '';
        $paydriver = 'Pay Driver';
    }
    else if($_COOKIE['lng'] == 'en'){
        //echo 'en';
        $lng_search_order = 'Search by order (e.x. 7033496)';
        $paysuccess = 'Already paid';
        $pend = 'Pending';
        $norecord = 'No Record';
        $owe = '';
        $paydriver = 'Pay Driver';
    }
    else if($_COOKIE['lng'] == 'th'){
        //echo 'th';
        $lng_search_order = 'ค้นหาตามใบสั่งซื้อ (e.x. 7033496)';
        $paysuccess = 'ชำระแล้ว';
        $pend = 'รอดำเนินการ';
        $norecord = 'ไม่มีการบันทึก';
        $owe = '';
        $paydriver = 'จ่ายกับคนขับ';
    }
    else if($_COOKIE['lng'] == 'cn'){
       // echo 'cn';
       $lng_search_order = '按订单搜索（e.x. 7033496）';
       $paysuccess = '等待付款';
       $pend = '有待';
       $norecord = '没有记录';
       $owe = '';
       $paydriver = '薪酬司机';
       
    }
?>
<?php
/* $num_rec = $this->input->get('num'); 
	  $page_get = $this->input->get('page',TRUE);
	  $start_get =  $this->input->get('start',TRUE);
	  if($num_rec==""){
	  	$num_rec = 1;
	  }
	  if($page_get==""){
	  	$page_get = 1;
	  }
	   $page = $total_user/$num_rec;
								$user_level = $this->session->userdata('i_rating');
      							$user_id = $this->session->userdata('i_id');*/
      							
	  ?>
	  <style>
	  		.end-page {
    position: fixed; 
    left: auto;
    right: 0;
    top: 260px;
    opacity: .9;
    z-index: 3;
    padding: 1rem;
    overflow-y: auto;
    cursor: default;
}
.top-page {
    position: fixed;
    left: auto;
    right: 0;
    /* top: 160px; */
    bottom: 150px;
    opacity: .9;
    z-index: 3;
    padding: 10px;
    overflow-y: auto;
    /* cursor: default; */
    background: #c5bfbf;
}
.table-responsive{
			margin-bottom: 0 !important;
			border:none !important;
}
@media screen and (max-width: 767px){
	#bodyClick{
		right: 229px !important;
	}
}

		</style>
		<section >
		
        <div class="container" style="padding: 0 10px;margin-top: 35px;">
						<h4 class="lng-booking-infomation" style="text-align: center; margin-bottom: 15px;"></h4>
						<div style="display: none;" id="top-end_btn">
							<!--<button class="top-page btn btn-info"  onclick="scrollWin('top');" style="cursor: pointer;"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
							<button class="end-page btn btn-info"  onclick="scrollWin('end');"  style="cursor: pointer;"><i class="fa fa-angle-down" aria-hidden="true"></i></button>-->
							<div class="top-page "  style="" onclick="scrollWin('top');"  style="cursor: pointer; display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>	 
	  
	  				<div class="toolbar" style="    background: #ffffff;
    padding: 8px;
    margin-bottom: 10px;">
                        <div class="input-group" style="display: block;">
														<? 
																$adate = date('Y-m-d');
																$date = date("Y-m-d",strtotime("-1 month",strtotime($adate)));
																$latedate = date("Y-m-t",strtotime($adate));
														?>
							
														<table width="100%">
																<tr>
																		<td width="49%">
			 <input id="date1"   class="datepicker"  name="date" type="text" value="<?=$date;?>" style="    width: 100%;
    padding: 10px;
    border: 1px solid #3b5998;
    border-radius: 25px;">  
																		</td>
																		<td width="2%"></td>
																		<td  width="49%">
				<input id="date2"   class="datepicker"  name="date" type="text" value="<?=$latedate;?>"  style="    width: 100%;
    padding: 10px;
    border: 1px solid #3b5998;
    border-radius: 25px;">  
																		</td>
																</tr>
														</table>
														<div style="  margin: 15px 0;
    margin-bottom: 0;">
																<input id="search_order"   class=""  name="date" type="text" value="" onkeyup="search()" placeholder="<? echo $lng_search_order;?>"  style="padding: 10px;
    border: 1px solid #3b5998;
    border-radius: 25px;
    width: 100%;">  
							
														</div>
					
												</div>
                    </div>
   					<div class="">
                <div style="padding: 8px;
    border-radius: 12px;
    border: 1px solid #3b5998;">
                    
<style>
.tr-hover:hover {
/*    color: hotpink;*/
    color: #038cfc;
    /*background-color: #f96c3e;*/
    cursor: pointer;
}
.tr-hover{
    text-align: center;
}
.pagination.pagination-info>.active>a, .pagination.pagination-info>.active>a:focus, .pagination.pagination-info>.active>a:hover, .pagination.pagination-info>.active>span, .pagination.pagination-info>.active>span:focus, .pagination.pagination-info>.active>span:hover {
    background-color: #07c284;;
    border-color: #00bcd4;
    box-shadow: 0 4px 5px 0 rgba(0, 188, 212, .14), 0 1px 10px 0 rgba(0, 188, 212, .12), 0 2px 4px -1px rgba(0, 188, 212, .2)
}
.inputDate::placeholder {
  color: rgba(51, 51, 51, 0.57);
}
.inputDate{
	 display: block;
    width: 100%;
    padding: .5rem .75rem;
    /* font-size: 1rem; */
    line-height: 1.25;
    color: #464a4c;
    background-color: #fff;
    background-image: none;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}
.btn-voucher{

    display: block;

    text-decoration: none;
    cursor: pointer;

    text-align: center;
    color: #ffffff;
	background-color: #3b5998;
	border-radius: 25px;
}
.display-none{
    display:none;
}
.btn-custom-pay{
	border-radius: 25px;
    background-color: #4caf50;
    display: block;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    color: #ffffff;
}
input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
  color: #333;
}
input:-moz-placeholder,
textarea:-moz-placeholder {
  color: #333;
}
input::-moz-placeholder,
textarea::-moz-placeholder {
  color: #333;
}
input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  color: #333;
}
</style>	
							
      			
							<?php if($levelme==1){ ?>
							<div class="table-responsive">
                            <table id="bootstrap-table1" class="table table-hover">
                                <thead>
                                   <!-- <th data-field="state" data-checkbox="true" style="display: none;"></th>-->
                                    <th class="text-center"><p>ID</p></th>
                                	<th data-sortable="true" class="text-center"><p class="lng-name_d">Name</p></th>
                                	<th data-sortable="true" class="text-center "><p class="lng-username_d">UserName</p></th>
                                	<th data-sortable="true" class="text-center email"><p class="lng-email_d">Email</p></th>
                                	<th  data-sortable="true" class="text-center Cr"><p class="lng-cr_d">Cutomer Reference</p></th>
                                	<th data-field="actions" class="td-actions text-center code" data-events="operateEvents" data-formatter="operateFormatter"><p class="lng-code_d">Code</p></th>
                                	<th  data-sortable="true" class="text-center"><p class="lng-amount_d">Amount</p></th>
                                </thead>
                                <tbody>
                                <?php foreach($results as $show){ ?>
                                    <tr class="tr-hover" onclick="view_ref('<?=$show['i_id'];?>','<?=$show['s_code'];?>');">
                                        <!--<td style="display: none;"></td>-->
                                    	<td ><?=$show['i_id'];?></td>
                                    	<td ><?=$show['s_name'];?></td>
                                    	<td ><?=$show['s_username'];?></td>
                                    	<td ><?=$show['s_email'];?></td>
                                    	<td ><?=$show['num_ref'];?></td>
                                    	<td ><?=$show['s_code'];?></td>
                                    	<td ><?=$show['total_am'];?></td>
                                    </tr>
								<?php } ?>
  
                                </tbody>
                            </table>
     						</div>
							<?php }
							else if($levelme==2){ ?>
							<div class="table-responsive">
                            <table id="bootstrap-table" class="table table-hover">
                                <thead style="    background: #ddd;">
                                   <!-- <th data-field="state" data-checkbox="true" style="display: none;"></th>-->
                                    <th class="text-center "><span class="lng-date"></span></th><center></center>
                                    <th class="text-center"><span class="lng-order"></span></th>
                                	<!--<th data-sortable="true" class="text-center"><span class="lng-from"></span></th>
                                	<th data-sortable="true" class="text-center"><span class="lng-to"></span></th>-->
                                	 <th class="text-center"><span class="lng-payment"></span></th>
                                	<!--<th data-sortable="true" class="text-center">Price</th>-->
                                	
                                </thead>
                                <tbody>
                                <?php foreach($results as $show){ 
									$mystring = $show['date_time'];
									if($show['invoice']!=" " and $show['invoice']!=null and $show['invoice']!=""){
										$class = "btn-voucher";
									}else{
										$class = "";
									}
									
									$status_pay = '';
									if($show['status_pay']==0){
										if($show['status_pay_driver']==1)	{
									$status_pay = $paydriver;
										}else{	
$status_pay = '<a class=" btn-xs btn-custom-pay" style="font-size: 15px;" href="https://www.welovetaxi.com/app/booking2/dashboard/payment?data='.$show['invoice'].'&type='.$show['type'].'"><span class="lng-paynow">Pay Now</span></a>';
										}
									}else if($show['status_pay']==1){
										$status_pay = $paysuccess;
									}
									else if($show['status_pay']==2){
										$status_pay = $owe;
									}
                                ?>
                              
                                    <tr class="tr-hover" >
                                        <!--<td style="display: none;"></td>-->
                                    	<td ><? echo $show['date_time'];?> </td>
                                    	<td >
                                    	<div class="<?=$class;?>" onclick="view_order_level2('<?=$show['invoice'];?>','<?=$show['type'];?>');"><?=$show['invoice'];?></div></td>
                                    	<td><?=$status_pay;?></td>
                                    	<!--<td ><?=$show['from'];?></td>
                                    	<td ><?=$show['to'];?></td>-->
                                    	<!--<td ><?=$show['total_price'];?></td>-->
                                    
                                    </tr>
								<?php } ?>
  
                                </tbody>
                            </table>
     						</div>
							<?php } 
							if(!$results){
								$display = '';
							}else{
								$display = 'none';
							}
							echo '<h3 style="text-align: center;color: red;display:'.$display.';"  class="no-record"><strong  >'.$norecord.'</strong></h3>';
							?>
			<div style="display: none;">
				<div class="fixed-table-pagination" style="display: none;">
				   <div class="pull-left pagination-detail" style="margin: 10px;display: none;" >
				      <span class="pagination-info"></span>
				      <span class="page-list">
				         <span class="btn-group dropup">
				            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 70px;" >
				            <span class="page-size"><?php if($num_rec){echo $num_rec; }else{ echo "5";} ?></span> 
				            <span class="caret"></span></button>
				            <ul class="dropdown-menu" role="menu">
				               <li class='<? if($num_rec==5){echo "active";} ?>'><a  href="<?php echo base_url(); ?>dashboard/view_user?num=5&start=0&page=1" >5</a></li>
				               <li class='<? if($num_rec==10){echo "active";} ?>'><a href="<?php echo base_url(); ?>dashboard/view_user?num=10&start=0&page=1" >10</a></li>
				               <li class='<? if($num_rec==15){echo "active";} ?>'><a href="<?php echo base_url(); ?>dashboard/view_user?num=15&start=0&page=1" >15</a></li>
				               <li class='<? if($num_rec==20){echo "active";} ?>'><a href="<?php echo base_url(); ?>dashboard/view_user?num=20&start=0&page=1" >20</a></li>
				            </ul>
				         </span>
				        <!-- rows visible-->
				      </span> 
				   </div>
				   <?// echo $total_user." : ".$num_rec; 
				   	$frist_page = $page-$page+1;
				   	if($frist_page==$page_get){
						$disabled_frist = "disabled";
						?><script>$(document).ready(function(){	$('.page-first a').attr('href','#');
				        $('.page-pre a').attr('href','#');	});
				       </script> <?
					}
				   ?>
				   <div class="pull-right pagination" style="margin: 0px 0 !important;">
				      <ul class="pagination pagination-info">
				         <!--<li class="page-first <?=$disabled_frist;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=0&page=<?=$frist_page;?>">«</a></li>-->
				         <li class="page-pre <?=$disabled_frist;?>"><a href="javascript:void(0)">‹</a></li>
		
				         <?php 
				        
				         for($i=0;$i<$page;$i++){
				         	$cur = $i+1;
				         		if($cur==$page_get){
									$active = "active";
								}else{
									$active = "";
								}
						 	?> <li class="page-number <?=$active;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$i*$num_rec;?>&page=<?=$cur;?>"><?=$cur;?></a></li> <?
						 }?>
						   <? if($page==$page_get){
				         	$disabled_last = "disabled";
				        ?> <script>$(document).ready(function(){	$('.page-next a').attr('href','#');
				        $('.page-last a').attr('href','#');	});
				       </script> 
				      <?   } ?>
				         <li class="page-next <?=$disabled_last;?>"><a id="next_page" href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$start_get*$page_get;?>&page=<?=$page_get+1;?>">›</a></li>
				        <!-- <li class="page-last <?=$disabled_last;?>"><a href="<?php echo base_url(); ?>dashboard/view_user?num=<?=$num_rec;?>&start=<?=$start_get;?>&page=<?=$page;?>">»</a></li>-->
				      </ul>
				   </div>
				</div>
</div>

                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
</div>
		</section>
<br/>
<br/>
<br/>
<br/>

<style>

	.dialog{
	z-index: 300;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    /* padding: 15px; */
    background: #f5f5f5;
    display: none;
    overflow: auto;
	}


</style>
    <!-- -->
<div class="dialog" id="dialog"> <div id="show_order"></div></div>
  	
<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal_showdata">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  	
<!--End Modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-fullscreen" id="open_modal" style="display: none;" >Open Modal</button>           

<script>
var date=$('#date1').val();
    $('#date1').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        closeOnSelect: true,
        closeOnClear: false,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        },
		  onSet: function(context) {
		 		findRowDate();
		  }
        });

</script>

<script>
var date=$('#date2').val();
	  $('#date2').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        closeOnSelect: true,
        closeOnClear: false,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        },
		  onSet: function(context) {
		 		findRowDate();
		  }
        });
</script>

<script>
function search() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_order");
  filter = input.value.toUpperCase();
  table = document.getElementById("bootstrap-table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
	

	function view_order_level2(order_id,type){
    console.log(type)
//			$( "#show_order" ).html( '<div align="center" ><img src="'+base_url+'dasboard/ring.gif" /></div>' );
			$( "#show_order" ).html( '<div align="center" ></div>' );
			$('#loading').css('display', 'block');
	    	$('#content').css('display', 'none');

			$.post( "https://www.welovetaxi.com/app/booking2/dashboard/voucher?order_id="+order_id,{ check : "yes" } ,function( data ) {
			$('#loading').css('display', 'none');
	        $('#content').css('display', 'block');
				$( "#show_order" ).html( data);
				
//					console.log(data);
					

		});
		// $('#sectionsNav').hide();
		$('#dialog').show();
		$('body').css('overflow','hidden');
//	$('#open_modal').click();
	}	
$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});



	
</script>

<!--<script>
	$('#gohome').click(function(){
		location.href = base_url;
	});
	$('#goto_realtime').click(function(){
		location.href = base_url+"?action=realtime";
	});
	$('#goto_reservation').click(function(){
		location.href = base_url+"?action=reservation";
	});
	$('#goto_management').click(function(){
		location.href = base_url+"dashboard/view_user?num=5&start=0&page=1";
	});
</script>
-->
<script>
	$( document ).ready(function() {
    	console.log(<?=$json;?>);
    	findRowDate();
      
    	
	
	});
	
	
	/*$( "#date2" ).change(function() {
	  	alert(555);
	  	findRowDate();
	});*/
	
	function findRowDate(){
//		alert(555);
		$('tr[class="tr-hover"]').css('display','');


		var dateFrom = $('#date1').val();
    	var dataTo = $('#date2').val();
    	var result ;

    	var arry = [];
	    $('#bootstrap-table tr[class="tr-hover"]').each(function (i, el) {
	      	var dataCheck = $(this).find('td').eq(0).text();
	    
	      result = checkBetween(dateFrom,dataTo,dataCheck);
	      
	      console.log(dataCheck+" : "+result);
	      if(result==false){
//		  	$(this).css('background-color','red');
		  	
			$(this).css('display','none');
		  }
	    });
	    
	    
//	    var rows = $("#bootstrap-table  tr[class='tr-hover']:not('.display-none')");
//	    var rows = $("#bootstrap-table  tr[class='tr-hover']").css('display');

	   var rows = $("tr[class='tr-hover']").filter(function() {
		    return $(this).css('display') !== 'none';
		}).length;
//	    alert(rows);
	    
	  	if(rows<=0){
			$('.no-record').css('display','');
		}else{
			$('.no-record').css('display','none');
		}
	    
	}
	
	function checkBetween(dateFrom,dateTo,dateCheck){
		
		var dateFrom = formatDate (dateFrom);
		var dateCheck = formatDate (dateCheck);
		var dateTo = formatDate (dateTo);
		
		
		var d1 = dateFrom.split("/");
		var d2 = dateTo.split("/");
		var c = dateCheck.split("/");

		var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
		var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
		var check = new Date(c[2], parseInt(c[1])-1, c[0]);

//	console.log(check <= to );
//	console.log(" :::" + dateFrom+' | '+dateCheck+' | '+dateTo );
		var date_before_to = check <= to;
		var date_behind_from = check >= from;
		console.log(date_before_to +" :: "+ date_behind_from );
		var result_check = false;
		if(date_before_to==true && date_behind_from==true){
			result_check = true;
		}
//		return (check => from && check <= to);
		return result_check;

	}

	function formatDate (input) {
	
	  var datePart = input.match(/\d+/g),
	  year = datePart[0].substring(0), // get only two digits
	  month = datePart[1], day = datePart[2];

	  return day+'/'+month+'/'+year;
}
	
</script>

<script>
	function scrollWin(type) {
		if(type=="top"){
			$('#top-end_btn').hide(700);
       $('html, body').animate({scrollTop:0},'500');
			 //window.scrollTo(0,document.body.scrollHeight-document.body.scrollHeight);

		}else if(type=="end"){
			 window.scrollTo(0,document.body.scrollHeight);
		}
   
}
</script>

<script>
	$('.picker__frame').append('<div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;" class="close_pickerdate"><div class="btn-close lng-close">Close</div></div>');

$('.close_pickerdate').click(function(){

    var $input = $('#date1').pickadate(); 
    var picker = $input.pickadate('picker');
	picker.close();
	
	 var $input2 = $('#date2').pickadate(); 
    var picker2 = $input2.pickadate('picker');
	picker2.close();
	});
</script>
