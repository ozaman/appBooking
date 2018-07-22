<?php
$webmail_cc = "gbtour.op@gmail.com"; 
//$emailurl = "http://tour - thailand.tk / demo / ";
$emailurl = "http://t-booking.com";
require_once('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();


////////////////////// Config
$webmail_port        = 465;                    // 端口
$webmail_host        = "smtp.zoho.com"; // SMTP server
$webmail_username    = "systeminfo-transfer@t-booking.com";     // SMTP server username
$webmail_password    = "khamenaja1";

$voucher = $_POST[voucher];
$sendby = "Golden Beach Tour Co.,Ltd.";
  $mail->CharSet = "utf-8";
  $mail->IsSMTP();  
  $mail->SMTPDebug = 2;                         // 启用SMTP
  $mail->SMTPAuth = true;                  // 启用SMTP认证
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host = $webmail_host; // SMTP server
  $mail->Port = $webmail_port;                 // set the SMTP port for the GMAIL server
  $mail->Username = $webmail_username;     // SMTP server username
  $mail->Password = $webmail_password ;            // SMTP server password 
  $mail->SetFrom("systeminfo-transfer@t-booking.com", ''.$sendby.'');
  $mail->AddReplyTo("systeminfo-transfer@t-booking.com",''.$sendby.'');
  $mail->Subject = "Reservation : $res_no ";
  $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
  $mail->MsgHTML("https://www.welovetaxi.com/app/booking2/dashboard/voucher?order_id=".$_POST[voucher]);
  //$to =  $_POST[phone]
  $address = $_POST[mail];
  
  
  $mail->AddAddress($address, "");
    if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  } 
  else {
  	echo "send";
  	
  }    //event
?>