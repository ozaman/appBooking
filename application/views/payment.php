<script src="https://cdn.omise.co/omise.js"></script>
		<script>
		  Omise.setPublicKey("pkey_test_59iaxcc7zsr77n4nbkb");
		</script>
        
  </style>
 <div id="loading" style="z-index: 9999;  position: fixed;  width: 100vw;   height: 100vh;   left: 0;    top: 0;   background: rgba(0, 0, 0, 0.59);    display: nones;">
        <div style="height: 115px;  border-radius: 4px;  background: #fff;  min-width: 15rem;   /* height: auto; */    left: 50vw;   top: 50vh;   transform: translate(-50%,-50%);   position: fixed;    z-index: 10000;">
            <div>
                <div style="font-weight: 500;  color: #000; padding: 35px; text-align: center;">
                    <div style="font-size: 15px" >Loading</div>
                    <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i>
                </div>            
            </div>
        </div>
    </div>
<section style="height: 100vh;background: #fff;     margin-bottom: 35px;">
    <div class="container">
        <div style="margin-top: 52px">
            <div class="col-md-12">
                <div class="col-md-12" style="text-align: center;  padding-bottom: 12px; font-size: 18px;  font-weight: 400;    margin-bottom: 5px;border-bottom: dashed 3px #3b5998;" >
                    <span class="lng-payment"></span>
                </div>
            </div>


    

        <div id="foget-password">
            <div class="box-in-foget" >
                <i class="material-icons " id="close" style="position: absolute;  right: 15px;top: 15px;color:#fff">close</i>
                <div style="text-align: center; padding: 20px 10px; font-size: 18px; background: #3b5998; color: #fff;" class="lng-omise-gateway">   
                    <span style="text-align: center;vertical-align: super;font-size: 18px; font-weight: 400;" class="lng-omise-gateway">Payment Channel</span>
                </div>
                <div style="padding: 12px;padding-top:8px;padding-bottom: 0;">
                   <div class="col-md-12" id="forget">
                        <ul class="channel" style="list-style: none; padding-left: 6px;">
                            <li class="credit-card">
                                <i class="fa fa-credit-card pad" aria-hidden="true"  style="color:#1a53f0;font-size: 25px;  width: 40px;"></i>
                                <span style="color:#333;" class="lng_credit_card">Credit Card</span>
                            </li>
                            <li>
                                <form class="paypal" action="./payments" method="post" id="paypal_form" target="_blank">
                                    <input type="hidden" name="cmd" value="_xclick" />
                                    <input type="hidden" name="no_note" value="1" />
                                    <input type="hidden" name="lc" value="UK" />
                                    <input type="hidden" name="currency_code" value="THB" />
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                                    
                                    <input type="hidden" name="first_name" value="Customer's First Name"  />
                                    <input type="hidden" name="last_name" value="Customer's Last Name"  />
                                    <input type="hidden" name="payer_email" value="ozaclever-busines-2@gmail.com"  />
                                    <input type="hidden" name="item_name" value="Customer's First Name"  id="item_name">
                                    <input type="hidden" name="item_number" value="988" id="item_number">
                                    <input type="hidden" type="number" name="txt_amount" class="textInput"  id="amount" />
                                    <input type="hidden" name="txn_ids" value="Reference" id="reference" / >
                                    <i class="fa fa-paypal pad" aria-hidden="true" style="color:#253b80;font-size: 30px; width: 40px;"></i>
                                    <span>
                                      <input style="background: #ffffff;  border: 0; color:#333; " type="submit" name="submit" value="Paypal" id="paypal"  />
                                    </span>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="padding: 15px; overflow-y: scroll; height: 60vh; -webkit-overflow-scrolling: touch;">
                    <div>
                        <span class="lng_can_see" style="font-size: 16px;  font-weight: 400;"></span>
                    </div>
                    <div style="margin-top: 20px; padding: 0 15px;"> <span>1. </span> 
                        <span class="lng_credit_card" style="font-size: 15px;  font-weight: 400;"></span>
                    </div>
                    <div style="text-align: center;">
                        <img src="<?php echo base_url(); ?>files/images/omise.svg" alt="" style="width: 185px; height: 75px;">
                    </div>
                    <div style="padding: 15px 40px; font-size: 15px;">
                        <div><span class="lng_fee2"></span><span>: 3.65%</span></div>
                        <div><span class="lng_vat"></span><span>: 7%</span></div>
                    </div>
                    <div style="margin-top: 20px; padding: 0 15px;"> <span>2. </span> 
                        <span class="lng-paypal" style="font-size: 15px;  font-weight: 400;"></span>
                    </div>
                    <div style="text-align: center;">
                        <img src="<?php echo base_url(); ?>files/images/paypal.png" alt="" style="height: 140px;">
                    </div>
                    <div style="padding: 15px 40px; font-size: 15px;">
                        <div><span class="lng_fee"></span></div>
                        <div><span class="lng_do_not_need"></span></div>
                    </div>                    
                </div>
            </div>
        </div>
        <div id="foget-password2">
            <div class="box-in-foget2" >
            <div style="border-bottom: 1px solid #ddd; text-align: center; padding: 20px 10px; font-size: 16px; color: #fff; background: #3b5998;" class="lng-omise-gateway">
            </div>  
            <div style="text-align: center; padding: 15px;">
                <img src="https://assets.omise.co/assets/omise-logo-a86debcb438f41aa395a868ff43fe67090e277d44dea080cd2d51baec405ea71.svg" alt="" width="100">
            </div>
            <i class="material-icons" id="close-credit-card" style="position: absolute;top: 15px; right: 15px;color: #fff;">close</i>
            <div style="padding: 20px;padding-top:0">
                <form id="checkout" >
          				  <input type="hidden" name="omise_token">
          				  <input type="hidden" class="form-control" id="datain" name="data" >
                  <!-- <input type="hidden" class="form-control" id="amount" name="amount"> -->
                  <!-- <input type="hidden" name="item_namec" value="Customer's First Name"  id="item_namec"> -->
      		          <div class="control-group">
      		            	<div class="control-label label_name">Cardholder Name</div>		            
      		              <input type="text" data-omise="holder_name" class="iname" id="creditname" name="creditname"  placeholder="Ex. John Smith"pattern="\w+ \w+.*" title="Fill your first and last name" required>		            
      		          </div>
				            <div class="control-group" >	
		                    <div class="control-label label_cardnumber">Card Number</div>		            	
		                            
  		                  <input type="text" data-omise="number1" class="cardnumber" id="cardnumber"  autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="" required>		                
  		                  <input type="text" data-omise="number2" class="cardnumber" id="cardnumber2" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="margin-left: 1%;" required>		                
  		                  <input type="text" data-omise="number3" class="cardnumber" id="cardnumber3" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="margin-left: 1%;" required>		                
  		                  <input type="text" data-omise="number4" class="cardnumber" id="cardnumber4" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="xxxx"title="4 Digit" style="margin-left: 1%;" required>	                        
		                </div>
				            <div class="control-group">
		                    <div class="control-label label_date">Expiration Date</div>	
		            	      <input type="text" data-omise="expiration_month" class="numdate" id="numdate" autocomplete="off" maxlength="2" placeholder="mm"pattern="\d{2}" title="4 Digit" required>
		            	      <div class="control-label label_slad">/</div>		                
		                    <input type="text" data-omise="expiration_year" class="numyear" id="numyear" autocomplete="off" maxlength="4" placeholder="yyyy"pattern="\d{4}" title="4 Digit" required>
		                
		                </div>
    				        <div class="control-group">
    		                <div class="control-label label_cardcvv">CVV</div>              
    		                <input type="password" data-omise="security_code" class="ccv" id="cvv"autocomplete="off" maxlength="3" placeholder="***"pattern="\d{3}" title="Three digits at back of your card" required>
    		                <img src="<? echo base_url(); ?>/files/images/cvv2.png" style="width: 68px; margin-left: 200px;  margin-top: -42px; position: absolute; " />	
    		                <p class="maxtext">Must be 4 digits!</p>
    		                <p class="maxtext2">Must be 2 digits!</p>
    		                <p class="maxtext3">Must be 3 digits!</p>
    		                <p class="maxtext4">Must be 4 digits!</p>                
    		            </div>
                    <div id="token_errors"></div>
		                <input type="submit" id="create_token" class="btn-submit"  value="Submit" >
				        </form>
            </div>
        </div>
    </div>

        <!-- internet banking -->

    <div id="foget-password3">
        <div class="box-in-foget3" >
            <div style="text-align: center; padding: 30px 10px; font-size: 16px;font-weight: 400;" class="lng-omise-gateway"> 
                <span style="text-align: center;color: #333;vertical-align: super;" class="lng-omise-gateway" >Internet Banking</span>
                <i class="fa fa-times pull-right" style="font-size: 22px; position: fixed; right: 15px;  top: 15px;" id="close-internet-banking" aria-hidden="true"></i>
            </div> 
            <div style="padding: 12px;padding-top:0">
                <div class="col-md-12" id="forget">
                    <form> 
                        <ul class="channel" style="list-style: none; padding-left: 6px;">
                            <li >                       
                                <div class="radio">
                                    <label style="padding-left:0;width:100%">                        
                                        <div class="omise-logo-wrapper scb">
                                            <img src="<?php echo base_url(); ?>files/img/omise-offsite-scb.svg" class="scb" />
                                        </div>
                                        <div class="omise-banking-text-wrapper">
                                            <span class="">Siam Commercial Bank</span>                                    
                                        </div>
                                        <input type="radio" data-omise="offsite_provider" id="omise_offsite_scb" name="offsite_provider" value="internet_banking_scb" style="position: absolute;  right: 0;  top: 12px;"/>                       
                                    </label>
                                </div> 
                            </li>
                          
                            <li >
                                <div class="radio">
                                    <label style="padding-left:0;width:100%">
                                        <input type="radio" data-omise="offsite_provider" id="omise_offsite_ktb" name="offsite_provider" value="internet_banking_ktb" />
                                        <div class="omise-logo-wrapper ktb">
                                            <img src="<?php echo base_url(); ?>files/img/omise-offsite-ktb.svg" class="ktb" />
                                        </div>
                                        <div class="omise-banking-text-wrapper">
                                            <span class="">Krungthai Bank</span>
                                            
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li >
                                <div class="radio">
                                    <label style="padding-left:0;width:100%">
                                        <input type="radio" data-omise="offsite_provider" id="omise_offsite_bay" name="offsite_provider" value="internet_banking_bay" />
                                        <div class="omise-logo-wrapper bay">
                                            <img src="<?php echo base_url(); ?>files/img/omise-offsite-bay.svg" class="bay" />
                                        </div>
                                        <div class="omise-banking-text-wrapper">
                                            <span class="">Krungsri Bank</span>
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li >
                                <div class="radio">
                                    <label style="padding-left:0;width:100%">
                                        <input type="radio" data-omise="offsite_provider" id="omise_offsite_bbl" name="offsite_provider" value="internet_banking_bbl" />
                                        <div class="omise-logo-wrapper bbl">
                                            <img src="<?php echo base_url(); ?>files/img/omise-offsite-bbl.svg" class="bbl" />
                                        </div>
                                        <div class="omise-banking-text-wrapper">
                                            <span class="">Bangkok Bank</span>
                                        </div>
                                    </label>
                                </div>
                            </li>                       
                        </ul>
                            <div class="buttons">  
                                <input type="submit" class=" btn-checkout" style="100%"  value="Submit" />        
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <table class="table " width="100%">
            <tr>
                <td colspan="2" align="center">
                    <div class="status-pay" style="font-weight: 400; font-size: 16px; top: 51px; color: rgb(255, 0, 0);         right: 73px;">                    
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                <span class="lng-product"></span>
                </td>
                <td>
                <span id="pdname"></span>
                </td>
            </tr>
            <tr class="show_transfer">
          			<td>
          			<span class="lng-car_type"></span>
          			</td>
          			<td>
          			<span id="car_type"></span>
          			</td>
      		  </tr>
            <tr>
                <td>
                    <span class="voucher-lang lng-voucher-no"></span>
                </td>
                <td>
                    <span id="voucher"></span>
                </td>
            </tr>
            <tr id="amout_num">
                <td>
                    <span class="amount-lang lng-amount"></span>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <span class="adult-lang lng-adult"></span> :	<span id="adult"></span>
                            </td>
                            <td width="10"></td>
                            <td>
                                <span class="child-lang lng-child"></span> :	<span id="child"></span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="price-lang lng-price"></span>
                </td>
                <td>
                    <span id="price"></span> <span class="currency"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="book_by-lang lng-book-by"></span>
                </td>
                <td>
                    <span id="book_by"></span>
                </td>
            </tr>
            <tr class="box-pay">
                <td>
                    <span class="lng-amount"></span> (THB.)
                </td>
                <td>
                    <span id="total_amount"></span>
                    <span class="currency"></span> 
                </td>
            </tr>
            <tr  class="box-pay">                        
                <td align="center" colspan="2" style="" id="btn-pay"> 
                </td>
            </tr>
            <tr class="box-pay">                
                <td colspan="2">
                    <div class="pay-omise">
                      <span class="lng-paynow"></span>
                    </div>
                </td>
            </tr>
            <tr>       
                <td align="center" colspan="2" style="" id="btn-pay"> <br> <br>                  
                </td>
            </tr>
        </table>
    </div>
</div>
</section>
    
<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
               border-top: none;
               font-size: 16px;
           }
           boby{
            background-color: #fff !important;
           }
.pay-omise{
    color: #3b5998; */ 
    font-weight: 700;
    display: block;
    /* line-height: 36px; */ 
    padding: 12px;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    border-radius: 25px; 
    text-align: center;
    color: #ffffff;
    /* border: 1px solid #3b5998; */
    background-color: #3b5998;
    }
.omise-logo-wrapper         { display: inline-block; padding: 5px; margin-right:10px; border-radius: 2px; vertical-align: top; }
.omise-logo-wrapper img     { width: 25px; height:25px; }
.omise-banking-text-wrapper { display: inline-block;
   
    color: #333; }
.secondary-text             { color: #aaa; font-size: 80%; }
.scb { background: #4e2e7f; }
.ktb { background: #1ba5e1; }
.bay { background: #fec43b; }
.bbl { background: #1e4598; }
.circle{
    position: absolute;
    right: 0;
    top: 12px;
}
.check{
    position: absolute;
    right: 0;
    top: 12px;
}
</style>
    <style>
.channel li{
    padding: 8px 0;
    border-bottom: 1px solid #ddd;
}
.pad{
    padding-right: 10px;
    font-size: 20px;
}
.channel li span{
   font-size:15px;
   line-height: 2.5;
   vertical-align: super;
   
}
</style>
    <style>
  /* .checkout-form {
    max-width: 300px;
    margin-top: 40px;
  } */
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
<style>
    .btn-checkout{
        margin-top: 40px;
    /* position: absolute; */
    /* bottom: 15px; */
    /* right: 15px; */
    left: 15px;
    width: 100%;
    color: #eee;
    display: inline-block;
    padding: 13px;
    font-size: 16px;
    border: aliceblue;
    border-radius: 0;
    background: -o-linear-gradient(#ebaf00, #f1a100);
    background: -moz-linear-gradient(#ebaf00, #f1a100);
    background: linear-gradient(#3b5998, #3b5998);
    }
.img-bank{
    width: 30px;
    margin-right: 10px;  
}
    .textInput {
    border: 1px solid #dfdfdf;
    padding: 8px;
    margin: 8px 0;
    width: 100%;
}
#foget-password{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget{
    height: 100vh;
        /* border-radius: 4px; */
        background: #fff;
        min-width: 100%;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
#foget-password2{
    z-index: 21; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget2{
    height: 100vh;
        /* border-radius: 4px; */
        background: #fff;
        min-width: 100%;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
#foget-password3{
    z-index: 21; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget3{
    height: 100vh;
        /* border-radius: 4px; */
        background: #fff;
        min-width: 100%;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
.btn-close {
    /*width: 200px; */
    background: #4BB1C1;
    /* text-transform: uppercase; */
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    /* position: absolute; */
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
}
.label_name{
    display: block;
    font-size: 15px;
    margin-bottom: 5px;
			}
			.iname{
                width: 100%;
                color: #000;
                font-size: 16px;
                padding: 8px 20px;
                margin-bottom: 20px;
                border: 1px solid #3b5998;
                border-radius: 25px;

			    

			}
			.label_cardnumber{
				display: block;
                font-size: 16px;
                margin-bottom: 5px;
                /* font-weight: 200; */
                /* line-height: 10px; */
                /* margin-right: 90px; */
                /* clear: both; */
			}
			.label_cardnumber label{
				font-size: 20px;
	    		font-weight: 200;
	    		line-height: 10px;
	    		margin-right: 23px;
	    		clear:both;
			}
			.label_date{

                display: block;
                font-size: 15px;
                margin-bottom: 5px;

			}
			.label_cardcvv{
                font-size: 15px;
                display: inline-block;
                margin-bottom: 5px;
			}
			.ccv{
                font-size: 16px;
                text-align: center;
                display: block;
                border: 1px solid #3b5998;
                padding: 8px 0;
                color: #000;
                border-radius: 25px;
			}
			.cardnumber{
				
                width: 23.4%;
                text-align: center;
                box-sizing: border-box;
                margin-bottom: 20px;
                border: 1px solid #3b5998;
                padding: 8px;
                color: #000;
                border-radius: 25px;
			    


			}
			.cardnumber:first{
				margin-left: 20px;

			}
			.Expiry-Date{
				width: 225px;
			    height: 43px;
			    margin-bottom: 20px;
			    margin-left: 10px;
			    /* border-radius: 26px; */
			    border: 1px solid #3b5998;
			    padding: 20px 38px;
			    font-size: 16px;
			    color: #000;

			   
			}
			.Expiry-year{
				width: 115px;
				height: 43px;
				/* border-radius: 26px; */
				border: 1px solid #3b5998;
				padding: 20px 38px;
				font-size: 16px;
				color: #000;

			    
			}
			/* .btn-submit{				
                position: fixed;
                bottom: 15px;
                right: 15px;
                left: 15px;
                width: 92%;
                color: #eee;
                display: inline-block;
                padding: 13px;
                font-size: 16px;
                border: aliceblue;
                border-radius: 0;
                background: -o-linear-gradient(#ebaf00, #f1a100);
                background: -moz-linear-gradient(#ebaf00, #f1a100);
                background: linear-gradient(#3b5998, #3b5998);



            } */
            .btn-submit {
    margin-top: 62px;
    /* position: absolute; */
    /* bottom: 15px; */
    /* right: 15px; */
    left: 15px;
    width: 100%;
    color: #eee;
    display: inline-block;
    padding: 13px;
    font-size: 16px;
    border: aliceblue;
    border-radius: 0;
    background: -o-linear-gradient(#ebaf00, #f1a100);
    background: -moz-linear-gradient(#ebaf00, #f1a100);
    background: linear-gradient(#3b5998, #3b5998);
    border-radius: 25px;
    
}
			.btn-submit:focus{

				outline: none;


			}
			.btn-cancel{
				color: #000;
				display: inline-block;
				padding: 10px 57px;
    			margin-top: 59px;
				border:solid 1px #333;
				border-radius: 4px;
			}
			.headerp{
				display: block;
			    padding: 0;
			    font-size: 3em;
			    margin-bottom: 55px;
			    line-height: 40px;
			    color: #333333;
			    border: 0;
			    font-weight: 400;
				    
			}
			select {
				width: 220px;
				border: 1px solid #cccccc;
				background-color: #ffffff;
			}
			select, input[type="file"] {
				height: 30px;
				line-height: 30px;
			}
            .border-Right{
				position: absolute;
				/*border: solid 1px #8669FF; */
			    width: 55%;
			    /*height: 554px;*/
			    /*padding-left: 50px;*/
			    margin-top: 20px;
			    border-radius: 4px;
			    margin-left: 500px;
			}
			option{
				color: #7640f4;
			}
			.numdate{
				width: 80px;
                display: inline-block;
                font-size: 16px;
                box-sizing: border-box;
                margin-bottom: 20px;
                border: 1px solid #3b5998;
                padding: 8px;
                text-align: center;
                margin-right: 8px;
                color: #000;
                border-radius: 25px;
			}
			.numyear{
                width: 68%;
                margin-left: 5px;
                display: inline-block;
                font-size: 16px;
                box-sizing: border-box;
                margin-bottom: 20px;
                border: 1px solid #3b5998;
                padding: 8px 20px;
                color: #000;
                border-radius: 25px;
			}
			.label_slad{
				display: inline-block;
			}
			.imagess{
				display: block;
			    margin-left: 230px;
			    margin-bottom: 10px;
			}
			.maxtext{
				color: red;
			    font-size: 20px;
			    margin-top: -165px;
			    margin-left: 610px;
			    font-weight: 500;
			    position: absolute;
			    display: none;


			}
			.maxtext2{
				    color: red;
				    font-size: 20px;
				    margin-left: 610px;
				    margin-top: -96px;
				    font-weight: 500;
				    position: absolute;
				    display: none;


			}
			.maxtext4{
				    color: red;
				    font-size: 20px;
				    margin-left: 610px;
				    margin-top: -97px;
				    font-weight: 500;
				    position: absolute;
				    display: none;


			}
			.maxtext3{
				color: red;
			    font-size: 20px;
			    margin-left: 610px;
			    margin-top: -33px;
			    font-weight: 500;
			    position: absolute;
			    display: none;


			}
			
			#token_errors{
                color: red;
                position: absolute;
                margin-top: 10px;
                font-size: 16px;
            }
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
    </style>
    <script>
    var base_url = 'https://www.welovetaxi.com/app/booking2/';
$( document ).ready(function() {
    var product_name,total_amount = 0;
    $.post( "<?php echo base_url(); ?>dashboard/get_user", function( data ) {
		var obj = JSON.parse(data);
		$.each(obj, function (index, value) {
			$('#name').html(obj[index].s_name);
            $('#loading').hide();
		});
    });
    if($.cookie("lng")=="en" || $.cookie("lng")==undefined){
			
            $('#paypal').attr('value', 'Paypal')
			$('#create_token').attr('value', 'Confirm')
            
            
		}else if ($.cookie("lng")=="cn"){
			
            $('#paypal').attr('value', '貝寶')
			$('#create_token').attr('value', '确认')
            
            
		}else if ($.cookie("lng")=="th"){
			
            $('#paypal').attr('value', 'เพย์พาล')
			$('#create_token').attr('value', 'ยืนยัน')
            
            
		}

    //===============================================
    // $("#omise-form-checkout").submit(function() {
    //     var form            = $(this),
    //         alertSuccess    = form.find(".alert-success"),
    //         alertError      = form.find(".alert-error"),
    //         spinner         = form.find('.omise-submitting');
    //     // Show spinner icon.
    //     spinner.addClass('loading');
    //     // Hidden alert box
    //     alertError.removeClass('show');
    //     alertSuccess.removeClass('show');
    //     // Disable the submit button to avoid repeated click.
    //     form.find("input[type=submit]").prop("disabled", true);
    //     // Charge with internet banking.
    //     var posting = $.post("https://www.welovetaxi.com/app/booking/service/inBank.php", {
    //         "offsite_provider": form.find("[data-omise=offsite_provider]:checked").val()
    //         // "description": "Charge an internet banking from OpenCart that order id is <?php echo $orderid; ?> from <?php echo $billemail; ?>"
    //     });
    //     posting
    //         .done(function(resp) {
    //             spinner.removeClass('loading');
    //             resp = JSON.parse(resp);
    //             if (typeof resp === "object") {
    //                 if (typeof resp.error !== "undefined") {
    //                     alertError.html(resp.error).addClass('show');
    //                 } else {
    //                     if (typeof resp.redirect !== "undefined") {
    //                         console.log('redirect');
    //                         window.location = resp.redirect;
    //                     } else {
    //                         form.get(0).submit();
    //                     }
    //                 }
    //             }
    //             form.find("input[type=submit]").prop("disabled", false);
    //         })
    //         .fail(function(jqXHR, textStatus, errorThrown) {
    //             spinner.removeClass('loading');
    //             alertError.html("Omise "+errorThrown).addClass('show');
    //             form.find("input[type=submit]").prop("disabled", false);
    //         });
    //     // Prevent the form from being submitted;
    //     return false;
    // });
    //================================================================= 
    // function getParameterByName(name, url) {
    //     if (!url) url = window.location.href;
    //     name = name.replace(/[\[\]]/g, "\\$&");
    //     var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    //         results = regex.exec(url);
    //     if (!results) return null;
    //     if (!results[2]) return '';
    //     return decodeURIComponent(results[2].replace(/\+/g, " "));
    // }
    console.log(getParameterByName('data'))
    $('#datain').val(getParameterByName('data'))
    $("#checkout").submit(function () {
					  //$('#token_errors').css('display','none');
					//   $('.btn-submit').css('color', '#f1a100');
					$('#loading').show();
					//   $('#floatingCirclesG').css('display','block');
					  var form = $(this);
                    //   form.find("input[type=submit]").prop("disabled", true);
					  var card = {
					    "name": form.find("[data-omise=holder_name]").val(),
					    "number": form.find("[data-omise=number1]").val()+form.find("[data-omise=number2]").val()+form.find("[data-omise=number3]").val()+form.find("[data-omise=number4]").val(),
					    "expiration_month": form.find("[data-omise=expiration_month]").val(),
					    "expiration_year": form.find("[data-omise=expiration_year]").val(),
					    "security_code": form.find("[data-omise=security_code]").val()
					   
					   
					  };
 
					  Omise.createToken("card", card, function (statusCode, response) {
					    if (response.object == "error") {					    	
					      $("#token_errors").html(response.message);
					      $('#floatingCirclesG').css('display','none');
					      $('.btn-submit').css('color', '#fff');
					      form.find("[data-omise=holder_name]").val('');
					      form.find("[data-omise=number1]").val("");
					      form.find("[data-omise=number2]").val("");
					      form.find("[data-omise=number3]").val("");
					      form.find("[data-omise=number4]").val("");
					      form.find("[data-omise=expiration_month]").val("");
					      form.find("[data-omise=expiration_year]").val("");
					      form.find("[data-omise=security_code]").val("");
					     
					$('#loading').hide();
					    
					    //   form.find("input[type=submit]").prop("disabled", false);
					    } else {
                            console.log(statusCode)
                            console.log(response)
                            $('#token_errors').css('display','none');
                            //console.log(find("[data-omise=amount]").val())
                            var param = {
                                "omise_token": response.id,
                                "amount":  total_amount,
                                "data":  getParameterByName('data'),
                                "creditname" : $("#creditname").val()

                            };
                            console.log(param)
                            $.ajax({
                            type: 'POST',
                            url: 'https://www.welovetaxi.com/app/booking2/dashboard/paycredit',
                            data: param,
                            //contentType: "application/json",
                            //dataType: 'json',
                            success: function(data) {
                                console.log(data)
                                // form.find("[name=omise_token]").val(response.id);
                               ///form.get(0).submit();
                               location.reload();
                            }
                        });
					    	//alert("dsadsadas");
							//$('.btn-submit').css('color', '#f1a100');
					      	//$('.btn-submit').css('background', '#f1a100');
					      	//$('#floatingCirclesG').css('display','block');	    	
					      
					     
					      

					    };
					  });
					  return false;
					});
    $('.pay-omise').on('click', function() {
        $('#loading').show();
        $('#foget-password').fadeIn(500);
        //alert('asasasa')
        $.ajax({
            type: 'POST',
            url: 'https://www.welovetaxi.com/app/booking2/service/inBank.php',
           // data: { 'from': pro_id, 'lng': lng },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('#loading').hide();
            }
        });
        
    })
    $('.credit-card').on('click', function() {
        $('#loading').show();
        $('#foget-password2').fadeIn(500);
        $('#loading').hide();
        //alert('asasasa')
        // $.ajax({
        //     type: 'POST',
        //     url: 'https://www.welovetaxi.com/app/booking/service/inBank.php',
        //    // data: { 'from': pro_id, 'lng': lng },
        //     //contentType: "application/json",
        //     dataType: 'json',
        //     success: function(data) {
        //         console.log(data)
        //     }
        // });
        
    })
    $('.paypal').on('click', function() {
        $('#loading').show();
        $('#loading').hide();
    });
    $('.internet-banking').on('click', function() {
        //$('#foget-password').hide()
        $('#foget-password3').fadeIn(500);
        //alert('asasasa')
        $.ajax({
            type: 'POST',
            url: 'https://www.welovetaxi.com/app/booking2/dashboard/checkout',
           // data: { 'from': pro_id, 'lng': lng },
            contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
            }
        });
        
    })
    $('#close').on('click', function() {
        $('#foget-password').fadeOut(500)
    });
    $('#close-credit-card').on('click', function() {
        $('#foget-password2').fadeOut(500)
        $('#foget-password').show();
    });
    $('#close-internet-banking').on('click', function() {
        $('#foget-password3').fadeOut(500)
        $('#foget-password').show();
    });
	// $('#btn-logout-user').on('click', function() {
    //     if ($.cookie("lng") == "en") {
    //         var title_logout = "Logout ?";
    //         var text_logout = "Do you want to logout?";
    //         var yes = "Yes";
    //         var cancel = "Cancel"
    //     } else if ($.cookie("lng") == "cn") {
    //         var title_logout = "登出 ?";
    //         var text_logout = "您需要注销 ?";
    //         var yes = "是";
    //         var cancel = "取消";
    //     } else if ($.cookie("lng") == "th") {
    //         var title_logout = "ออกจากระบบ ?";
    //         var text_logout = "คุณต้องการออกจากระบบหรือไม่?";
    //         var yes = "ใช่";
    //         var cancel = "ยกเลิก";
    //     } else if ($.cookie("lng") == undefined) {
    //         var title_logout = "Logout ?";
    //         var text_logout = "Do you want to logout?";
    //         var yes = "Yes";
    //         var cancel = "Cancel";
    //     }
    //         swal({
    //                 title: '' + title_logout + '',
    //                 text: '' + text_logout + '',
    //                 type: "warning",
    //                 showCancelButton: true,
    //                 confirmButtonClass: "btn-danger",
    //                 confirmButtonText: yes,
    //                 cancelButtonText: cancel,
    //                 closeOnConfirm: false
    //             },
    //             function() {
    //                 console.log('logout');
    //                 $.removeCookie("login");
    
    //                 window.location.href = base_url + "register";
    
    //             });
    // })
    $('.box-login-non').click(function() {



        // console.log(data + " " + from + " " + to);
        window.location.href = "https://www.welovetaxi.com/app/booking2/register";

    });
    $('.pay-driver').on('click', function(){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>dashboard/paydriver',
            data: { 'data': getParameterByName('data') },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                window.location.href =  "https://www.welovetaxi.com/app/booking2/dashboard/view_user"
            }
        });
    })
	
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
                console.log(data[0].s_code)
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

function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    console.log(getParameterByName('type')+'********')
    console.log(getParameterByName('data')+"data")
    if($.cookie("lng")=="en" || $.cookie("lng")==undefined){
			//product_name = data.product_detail[0].topic_en;
			//cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
            $('.currency').text("baht.");
			$('#paypal').attr('value', 'Paypal')
            
		}else if ($.cookie("lng")=="cn"){
			//product_name = data.product_detail[0].topic_cn;
			//cartype = data.product_detail[0].car_topic_cn+" "+data.product_detail[0].pax_cn;
			$('.lng-flight').text('	航班');
			$('.lng-car_type').text('车型');
			$('.lng-transfer_date').text('日期/时间');
			$('.lng-num_of_car').text('车数');
            $('.currency').text('铢');
			$('#paypal').attr('value', '貝寶')
            
		}else if ($.cookie("lng")=="th"){
			//product_name = data.product_detail[0].topic_th;
			//cartype = data.product_detail[0].car_topic_th+" "+data.product_detail[0].pax_th;
			$('.lng-flight').text('เที่ยวบิน');
			$('.lng-car_type').text('ประเภทรถ');
			$('.lng-transfer_date').text('วัน/เวลา');
			$('.lng-num_of_car').text('จำนวนรถ');
            $('.currency').text('บาท');
			$('#paypal').attr('value', 'เพย์พาล')
            
		}
    $.ajax({
            type: 'POST',
            url: '../dashboard/pay',
            data: { 'invoice': getParameterByName('data'),'type': getParameterByName('type') },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                console.log('**************************')
                //console.log(product_name = data[0].product_detail.data[0].topic_en)
                console.log(data[0].product_detail[0])

                if($.cookie("lng")=="en" || $.cookie("lng")==undefined){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(wait for pay)');
                            $('.status-pay').css('color','red');
                        }
                        
                        $('.box-pay').show()
                        
                    }
                    else{
                        $('.status-pay').text('(Already paid)');
                        $('.status-pay').css('color','#4CAF50');
                        $('.box-pay').hide()
                          
                    }
                    if (data[0].type == 'Transfer') {
                      $('.show_transfer').show();
                      $('#car_type').html(data[0].product_detail[0].car_topic_en+data[0].product_detail[0].pax_en)
                        product_name = data[0].product_detail[0].topic_en;
                    }
                    else{
                      $('.show_transfer').hide();
                      product_name = data[0].product_detail.data[0].topic_en;
                    }
                    
                   
                  
                   
                }else if ($.cookie("lng")=="cn"){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(等待付款)');
                            $('.status-pay').css('color','red');
                        }
                       
                        $('.box-pay').show()
                        
                        
                    }
                    else{
                        $('.status-pay').text('(已經支付)'); 
                        $('.status-pay').css('color','#4CAF50'); 
                        $('.box-pay').hide()
                    }
                    if (data[0].type == 'Transfer') {
                      $('.show_transfer').show();
                      product_name = data[0].product_detail[0].topic_cn;
                    $('#car_type').html(data[0].product_detail[0].car_topic_cn+data[0].product_detail[0].pax_cn)
                    }
                    else{
                      $('.show_transfer').hide();
                      product_name = data[0].product_detail.data[0].topic_cn;
                    }
                    
                    
                  
                   
                }else if ($.cookie("lng")=="th"){
                    if(data[0].status_pay == 0){
                        if(data[0].status_pay_driver == 1){
                            $('.status-pay').text('(Pay driver)');
                        }
                        else{
                            $('.status-pay').text('(รอจ่าย)');
                            $('.status-pay').css('color','red');
                        }
                        
                        $('.box-pay').show()
                        
                       
                        
                    }
                    else{
                        $('.status-pay').text('(ชำระแล้ว)');  
                        $('.status-pay').css('color','#4CAF50');
                        $('.box-pay').hide()
                    }
                    if (data[0].type == 'Transfer') {
                      $('.show_transfer').show();
                       product_name = data[0].product_detail[0].topic_th;
                    $('#car_type').html(data[0].product_detail[0].car_topic_th+data[0].product_detail[0].pax_th)
                    }
                    else{
                      $('.show_transfer').hide();
                       product_name = data[0].product_detail.data[0].topic_th;
                    }
                   
                    
                    
                   
                }
                if(data[0].fashion == 'Realtime'){
                    
                $('#amout_num').hide()
                    
                }
                
                $('#pdname').html(product_name)
                $('#item_number').val(data[0].invoice)
                $('#reference').val(data[0].s_code)
                $('#item_name').val(data[0].book_by)
                $('#item_namec').val(data[0].book_by)
                //$('#amount').val(data[0].total_price)
                $('#voucher').html('<a href="'+data[0].voucher_url+'" target="_blank">'+data[0].invoice+'<a>');
                $('#adult').text(data[0].adult);
                $('#child').text(data[0].child);
                $('#num_of_car').text(data[0].numcar);
                $('#arrival_date').text(data[0].arrival_date);
                $('#arrival_time').text(data[0].arrival_time);
                $('#from').text(data[0].from);
                $('#to').text(data[0].to);
                $('#arrival_flight').text(data[0].arrival_flight);
                var book_date_f = data[0].booking_date;
                var res = data[0].booking_date.replace(" ", "/"); 
                $('#transfer_date').text(res);
                $('#book_by').text(data[0].guest_english);
                $('#price').text(data[0].total_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                $('#total_amount').text(data[0].total_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                console.log('===================')
                console.log(data[0].total_price)
                console.log(data[0].total_price*4.4)
                var charg = (parseInt(data[0].total_price)*4.4)/100;
                var sumcost = parseInt(data[0].total_price)+charg;
                console.log(sumcost)
                var baththai = 11;
                console.log(data[0].total_price)
                var free = (data[0].total_price*3.9)/100;
                console.log(free)
                console.log(baththai)
                
                var costpaypal = parseFloat(data[0].total_price)+parseFloat(free)+parseFloat(baththai);
                console.log(costpaypal)
                $('#amount').val(costpaypal);
                total_amount = data[0].totalpay
                
               
            }
        });

	});


    
</script>