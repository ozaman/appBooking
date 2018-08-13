<?php

class Savebook_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function savebook() { 
     
      $data['product'] = $this->input->post('program');
      $data['guest_english'] = $this->input->post('name');
      $data['numcar'] = $this->input->post('numcar');
      $data['phone'] = $this->input->post('phone');
      $data['phonecode'] = $this->input->post('phonecode');
      $data['email'] = $this->input->post('email');
      $data['arrival_date'] = $this->input->post('onndate');
      $data['arrival_time'] = $this->input->post('ontime');
      $data['adult'] = $this->input->post('adult');
      $data['child'] = $this->input->post('child');
      $data['total_pax'] = $this->input->post('pax');
      $data['place'] = $this->input->post('from');
      $data['to_place'] = $this->input->post('to');
      $data['total_price'] = $this->input->post('cost');
      $data['booking_date'] = date('Y-m-d H:i:s');
      $data['post_date'] = time();
      $data['other'] = $this->input->post('other');
      $data['arrival_flight'] = $this->input->post('arrival_flight');
      $data['guest_other'] = $this->input->post('guest_other');
      $data['s_code'] = $this->input->post('s_code');
      $data['s_code_ref'] = $this->input->post('code_ref');
      $data['cost_a_nett'] = $this->input->post('cost_a_nett');
      $data['lat_from'] = $this->input->post('lat_f');
      $data['lng_from'] = $this->input->post('lng_f');
      $data['lat_to'] = $this->input->post('lat_t');
      $data['lng_to'] = $this->input->post('lng_t');
      $data['fashion'] = $this->input->post('book');
      $data['address_en_from'] = $this->input->post('place_from');
      $data['address_en_to'] = $this->input->post('place_to');
      $data['terminal'] = $this->input->post('terminal');
      $data['type'] = $this->input->post('product_type');
      //return $times;
     
      
     
    
      $this->db->insert('ap_order',$data);      
      //$this->db->limit(100);
      $getid = $this->db->insert_id();
      
      if ($getid) {
       
                          $date3 = date('ymd');
                          $agent_ref = $date3.$getid;

                          $data2['agent_ref'] =$agent_ref;
                          $this->db->where('id', $getid);
                          $this->db->update('ap_order', $data2);
                          if ($this->db->affected_rows() > 0) {
                            return $agent_ref;
                          }
                          
                         
        }
        else{

          
                            //echo $finalcode;
        }

  }
   public function saveapi($x,$y) { 
        $tarr = array();
        $xde = $x;
       
        $pp = array();
        $pp["arr_post"] = $y;
        $pp["tbooking"] =  $xde;
        $ppjson = json_encode($pp);
              $headers = array();

$url = "http://www.welovetaxi.com:3000/bookrealtime";
//$api_key = '1f7bb35be49521bf6aca983a44df9a6250095bbb';
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json'
        // 'API-KEY: '.$api_key.''
    )
);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url);  

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $ppjson);
$curl_response = curl_exec($curl);
//echo $curl_response;
curl_close($curl);
        // foreach ($x as $row ) {
        
  }
  // tour


  public function savebooktour() { 
     
      $data['product'] =$this->input->post('program');
      $data['guest_english'] =$this->input->post('name');
      $data['phone'] =$this->input->post('phone');
      $data['phonecode'] =$this->input->post('phonecode');
      $data['email'] =$this->input->post('email');
      $data['arrival_date'] =$this->input->post('ondate');
      $data['arrival_time'] =$this->input->post('ontime');
      $data['adult'] = $this->input->post('adult');
      $data['child'] = $this->input->post('child');
      $data['place'] = $this->input->post('from');
      $data['to_place'] = $this->input->post('to');
      $data['total_price'] = $this->input->post('cost');
      $data['booking_date'] = date('Y-m-d H:i:s');
      $data['post_date'] = time();
      $data['remark'] = $this->input->post('other');      
      $data['guest_other'] = $this->input->post('guest_other');
      $data['s_code'] = $this->input->post('s_code');
      $data['s_code_ref'] = $this->input->post('code_ref');
      $data['cost_a_nett'] = $this->input->post('cost_a_nett');     
      $data['address_en_from'] = $this->input->post('place_from');
      $data['address_en_to'] = $this->input->post('place_to');
      $data['type'] = $this->input->post('product_type');
      //return $times;
     
      
     
    
      $this->db->insert('ap_order',$data);      
      //$this->db->limit(100);
      $getid = $this->db->insert_id();
      // return $getid;
      if ($getid) {
       
                          $date3 = date('ymd');
                          $agent_ref = $date3.$getid;

                          $data2['agent_ref'] =$agent_ref;
                          $this->db->where('id', $getid);
                          $this->db->update('ap_order', $data2);
                          if ($this->db->affected_rows() > 0) {
                            return $agent_ref;
                          }
                          
                         
        }
        else{

          
                            //echo $finalcode;
        }

  }

  public function saveapitour($x) { 
        $x = json_decode($x);
        // foreach ($x as $row ) {
        $invoice = $x->invoice;
        $link = $x->voucher_url;
        $agent_ref = $x->agent_ref;
        $email= $x->email;
        $res_no = $x->code_ref;
        // }
        //return  $invoice.'-'.$agent_ref;
        //return $x->invoice;
        $data2['invoice'] = $invoice;
        $data2['voucher_url'] = $link;
        $this->db->where('agent_ref', $agent_ref);      
        $this->db->update('ap_order', $data2);
        if ($this->db->affected_rows() > 0) {
         
        }
        else{
                            
        }
  }
  
  
  
}
?>