<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class Savebook_control extends CI_Controller {
	public function __construct() {
       parent::__construct();
       $this->load->model('Savebook_model');
   }

   public function index()
   {
		//$data['resault'] = $this->Place_model->getplace();
      $this->load->view('book/index');
  }
  function process(){
      $data = $this->Savebook_model->savebook();
	  //$array = array($age);
      echo json_encode($data);

  }
  function tour(){

        //$params = json_decode(file_get_contents('php://input'), TRUE);


        //$resp = $this->Savebook_model->savebooktour($params);
      $data = $this->Savebook_model->savebooktour();
      //$array = array($age);
      echo json_encode($data);

  }
  
// function saveapi(){
//     if ($_POST[i_realtime] == 1) {
//         $d = 15*60;
//         $finaltime = time()+$d;
//     }
//     else{
//             // if (condition) {
//             //     # code...
//             // }


//         $finaltime = 0;
//     }

//         echo $finaltime;
//     }
function saveapi2(){

    $sd = 3;
    $hp = date('H')+$sd;
    $d = 15*60;
    if (date(''.$hp.':i') > '19:00') {
                    $_POST[i_realtime] = 1;
                    $finaltime = time()+$d;
                    echo date(''.$hp.':i');
                }
    
}
function saveapissss(){
    $sd = 3;
    $d = 15*60;

    if ($_POST[i_realtime] == 1) {
        $finaltime = time()+$d;
        $_POST[i_realtime] =  1 ;
    }
    else{
    $hp = date('H')+$sd;
            if (date('Y-m-d') == $_POST[ondate]) {
                if (date(''.$hp.':i') > $_POST[ontime]) {
                    $_POST[i_realtime] = 1;
                    $finaltime = time()+$d;
                }
                else{
                    $_POST[i_realtime] =  0;
                    $finaltime = 0;
                }
            }
        
        
    }

    echo json_encode($_POST);
    }
function saveapi(){
    $sd = 3;
    $d = 15*60;

    if ($_POST[i_realtime] == 1) {
        $finaltime = time()+$d;
        $_POST[i_realtime] =  1 ;
    }
    else{
    $hp = date('H')+$sd;
            if (date('Y-m-d') == $_POST[ondate]) {
                if (date(''.$hp.':i') > $_POST[ontime]) {
                    $_POST[i_realtime] = 1;
                    $finaltime = time()+$d;
                }
                else{
                    $_POST[i_realtime] =  0;
                    $finaltime = 0;
                }
            }
        
        
    }

       // echo $finaltime;
    if ($_POST[type] == 'Join' ) {
      if ($_POST[area] == 'Point' || $_POST[area] == 'In' ) {
          $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
          "guest_english" : "'.$_POST[guest_english].'",  
          "guest_other" : "'.$_POST[guest_other].'", 
          "phone": "'.$_POST[phone].'", 
          "email": "'.$_POST[email].'",
          "social_wechat" : "", 
          "social_qq" : "",  
          "social_wangwang" : "",  
          "social_line" : "",  
          "social_skype" : "",
          "social_whatapp" : "",
          "social_facebook" : "",
          "product" : "'.$_POST[product].'",
          "arrival_date": "'.$_POST[arrival_date].'",
          "arrival_time": "'.$_POST[arrival_time].'",
          "arrival_flight": "'.$_POST[arrival_flight].'",
          "arrival_visa": "'.$_POST[arrival_visa].'",
          "total_pax": "'.$_POST[total_pax].'",
          "to_place": "'.trim($_POST[to_place]).'",
          "to_place_address": "'.trim($_POST[to_place_address]).'",
          "remark":"'.$_POST[remark].'" ,
          "i_realtime": "'.$_POST[i_realtime].'",
          "i_realtime_finish" : "'.$finaltime.'"

      }';
  }

}
if ($_POST[type] == 'Join') {
    if ($_POST[area] == 'Out') {
      $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
      "guest_english": "'.$_POST[guest_english].'",  
      "guest_other": "'.$_POST[guest_other].'", 
      "phone": "'.$_POST[phone].'", 
      "email": "'.$_POST[email].'",
      "social_wechat" : "", 
      "social_qq" : "",  
      "social_wangwang" : "",  
      "social_line" : "",  
      "social_skype" : "",  
      "social_whatapp" : "",  
      "social_facebook" : "",   
      "product": "'.$_POST[product].'",   
      "departure_date": "'.$_POST[departure_date].'",  
      "departure_time": "'.$_POST[departure_time].'", 
      "departure_flight": "'.$_POST[departure_flight].'", 
      "departure_terminal": "'.$_POST[departure_terminal].'", 
      "total_pax": "'.$_POST[total_pax].'",                          
      "pickup_place" : "'.trim($_POST[pickup_place]).'", 
      "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",  
      "service_time" : "'.$_POST[service_time].'", 
      "remark" : "'.$_POST[remark].'",
      "i_realtime": "'.$_POST[i_realtime].'",
      "i_realtime_finish" : "'.$finaltime.'"

  }';
}
}
if ($_POST[type] == 'Private') {
    if ($_POST[area] == 'In') {
      $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
      "guest_english": "'.$_POST[guest_english].'",  
      "guest_other": "'.$_POST[guest_other].'", 
      "phone": "'.$_POST[phone].'", 
      "email": "'.$_POST[email].'",
      "social_wechat" : "", 
      "social_qq" : "",  
      "social_wangwang" : "",  
      "social_line" : "",  
      "social_skype" : "",  
      "social_whatapp" : "",  
      "social_facebook" : "",   
      "product": "'.$_POST[product].'",   
      "arrival_date": "'.$_POST[arrival_date].'",  
      "arrival_time": "'.$_POST[arrival_time].'", 
      "arrival_flight": "'.$_POST[arrival_flight].'",                        
      "total_pax": "'.$_POST[total_pax].'",
      "to_place": "'.trim($_POST[to_place]).'", 
      "to_place_address": "'.trim($_POST[to_place_address]).'", 
      "number_car": "'.$_POST[number_car].'", 
      "remark": "'.$_POST[remark].'" ,
      "i_realtime": "'.$_POST[i_realtime].'",
      "i_realtime_finish" : "'.$finaltime.'"

  }';
}
}
if ($_POST[type] == 'Private') {
    if ($_POST[area] == 'Out' ) {
      $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
      "guest_english": "'.$_POST[guest_english].'",  
      "guest_other": "'.$_POST[guest_other].'", 
      "phone": "'.$_POST[phone].'", 
      "email": "'.$_POST[email].'",
      "social_wechat" : "", 
      "social_qq" : "",  
      "social_wangwang" : "",  
      "social_line" : "",  
      "social_skype" : "",  
      "social_whatapp" : "",  
      "social_facebook" : "",   
      "product": "'.$_POST[product].'",   
      "departure_date": "'.$_POST[departure_date].'",  
      "departure_time": "'.$_POST[departure_time].'", 
      "departure_flight" : "'.$_POST[departure_flight].'", 
      "departure_terminal": "'.$_POST[departure_terminal].'",  
      "total_pax": "'.$_POST[total_pax].'", 
      "pickup_place": "'.trim($_POST[pickup_place]).'", 
      "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",                       
      "service_time": "'.$_POST[service_time].'",
      "number_car": "'.$_POST[number_car].'", 
      "remark":"'.$_POST[remark].'",
      "i_realtime": "'.$_POST[i_realtime].'",
      "i_realtime_finish" : "'.$finaltime.'"

  }';
}
}
if ($_POST[type] == 'Point To Point') {

  $curl_post_data = '{    
    "agent_ref": "'.$_POST[agent_ref].'",  
    "guest_english": "'.$_POST[guest_english].'",  
    "guest_other": "'.$_POST[guest_other].'", 
    "phone": "'.$_POST[phone].'", 
    "email": "'.$_POST[email].'",
    "social_wechat" : "", 
    "social_qq" : "",  
    "social_wangwang" : "",  
    "social_line" : "",  
    "social_skype" : "",  
    "social_whatapp" : "",  
    "social_facebook" : "",   
    "product": "'.$_POST[product].'", 
    "service_date": "'.$_POST[service_date].'",  
    "service_time":  "'.$_POST[service_time].'", 
    "total_pax": "'.$_POST[total_pax].'",  
    "number_car": "'.trim($_POST[number_car]).'", 
    "pickup_place": "'.trim($_POST[to_place]).'", 
    "to_place":"'.trim($_POST[to_place]).'", 
    "remark": "'.$_POST[remark].'",
    "i_realtime": "'.$_POST[i_realtime].'",
    "i_realtime_finish" : "'.$finaltime.'"
}';

}
if ($_POST[type] == 'Private' && $_POST[area] == 'Service') {

 $curl_post_data = '{  "agent_ref": "'.$_POST[agent_ref].'",  
 "guest_english": "'.$_POST[agent_ref].'",  
 "guest_other": "'.$_POST[guest_english].'", 
 "phone": "'.$_POST[phone].'", 
 "email": "'.$_POST[email].'",
 "social_wechat" : "", 
 "social_qq" : "",  
 "social_wangwang" : "",  
 "social_line" : "",  
 "social_skype" : "",  
 "social_whatapp" : "",  
 "social_facebook" : "",   
 "product": "'.$_POST[product].'", 
 "service_date": "'.$_POST[service_date].'",  
 "service_time":  "'.$_POST[service_time].'", 
 "total_pax": "'.$_POST[total_pax].'",  
 "number_car": "'.$_POST[number_car].'", 
 "pickup_place": "'.trim($_POST[pickup_place]).'", 
 "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",  
 "to_place" : "'.trim($_POST[to_place]).'", 
 "to_place_address": "'.trim($_POST[to_place_address]).'",  
 "car_use_plan": "'.$_POST[remark].'",
 "i_realtime": "'.$_POST[i_realtime].'",
 "i_realtime_finish" : "'.$finaltime.'"
}';

}
if ($_POST[type] == 'Private' && $_POST[area] == 'Point') {

 $curl_post_data = '{ "agent_ref" : "'.$_POST[agent_ref].'",  
 "guest_english" : "'.$_POST[guest_english].'",  
 "guest_other" : "'.$_POST[guest_other].'", 
 "phone": "'.$_POST[phone].'", 
 "email": "'.$_POST[email].'", 
 "product" : "'.$_POST[product].'",   
 "service_date" : "'.$_POST[service_date].'",  
 "service_time" :  "'.$_POST[service_time].'", 
 "total_pax" : "'.$_POST[total_pax].'",  
 "social_wechat" : "", 
 "social_qq" : "",  
 "social_wangwang" : "",  
 "social_line" : "",  
 "social_skype" : "",  
 "social_whatapp" : "",  
 "social_facebook" : "",   
 "pickup_place": "'.trim($_POST[pickup_place]).'",                         
 "to_place" : "'.trim($_POST[to_place]).'", 
 "to_place_address": "", 
 "pickup_place_address": "",
 "number_car" : "'.$_POST[number_car].'", 
 "remark": "'.$_POST[remark].'",
 "i_realtime": "'.$_POST[i_realtime].'",
 "i_realtime_finish" : "'.$finaltime.'"

}';
}
// $curl_post_data = array();
// $curl_post_data['agent_ref'] =  $_POST[agent_ref];

$headers = array();

$url = "http://www.t-booking.com/apiv2/book/create";
$api_key = '1f7bb35be49521bf6aca983a44df9a6250095bbb';
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json',
        'API-KEY: '.$api_key.''
    )
);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url);  

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);
//echo $curl_response;
curl_close($curl);

$message = iconv("incoming-charset", "utf-8", $curl_response);
$response = $curl_response;
$data = $this->Savebook_model->saveapi($response);
      //$array = array($age);
 echo $data.$response;
// echo json_encode($curl_post_data);

}
function saveapitour(){
    if ($_POST[c_transfer] == 1) {

     $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
     "guest_english": "'.$_POST[guest_english].'",  
     "guest_other": "'.$_POST[guest_other].'", 
     "phone": "'.$_POST[phone].'", 
     "email": "'.$_POST[email].'",
     "social_wechat" : "", 
     "social_qq" : "",  
     "social_wangwang" : "",  
     "social_line" : "",  
     "social_skype" : "",  
     "social_whatapp" : "",  
     "social_facebook" : "",   
     "product": "'.$_POST[product].'",
     "adult": "'.$_POST[adult].'",
     "child": "'.$_POST[child].'",
     "ondate": "'.$_POST[ondate].'",
     "program_start": "'.$_POST[program_start].'",
     "pickup_place" : "'.$_POST[pickup_place].'",
     "to_place" : "'.$_POST[to_place].'",
     "remark": "'.$_POST[remark].'"


 }';
}
else{
    $curl_post_data = '{"agent_ref": "'.$_POST[agent_ref].'",  
    "guest_english": "'.$_POST[guest_english].'",  
    "guest_other": "'.$_POST[guest_other].'", 
    "phone": "'.$_POST[phone].'", 
    "email": "'.$_POST[email].'",
    "social_wechat" : "", 
    "social_qq" : "",  
    "social_wangwang" : "",  
    "social_line" : "",  
    "social_skype" : "",  
    "social_whatapp" : "",  
    "social_facebook" : "",   
    "product": "'.$_POST[product].'",
    "adult": "'.$_POST[num_adult].'",
    "child": "'.$_POST[num_child].'",
    "ondate": "'.$_POST[ondate].'",
    "program_start": "'.$_POST[program_start].'",
    "remark":  "'.$_POST[remark].'"


}';
}




        // "to_place_address": "'.trim($_POST[to_place_address]).'", 
        // "pickup_place_address": "'.trim($_POST[pickup_place_address]).'",  
       //echo $curl_post_data;
$headers = array();

$url = "http://www.t-booking.com/apiv2/book/create";
$api_key = '1f7bb35be49521bf6aca983a44df9a6250095bbb';
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json',
        'API-KEY: '.$api_key.''
    )
);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url);  

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);
//echo $curl_response;
curl_close($curl);

$message = iconv("incoming-charset", "utf-8", $curl_response);
$response = $curl_response;
// foreach ($response as $row ) {
// $invoice = $row->invoice;
//  //$row_data[] = $data;
// }
//echo json_encode($response);
$data = $this->Savebook_model->saveapitour($response);
      //$array = array($age);
echo $data.$response;

}



}
?>
