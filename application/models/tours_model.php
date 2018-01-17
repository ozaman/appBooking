<?php 
header('Access-Control-Allow-Origin: *');

class Tours_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }



  function loadgallery() {

      $product = $this->input->post('id');
      $select = array("a.id AS a_id",
       "a.product AS a_product",
       "a.gallery AS a_gallery",
            
       "b.id AS b_id",
       "b.gallery AS b_gallery",
       "b.company AS b_company",
       "b.directory AS b_directory"
       );
      foreach ($select as $key => $value){
        $this->db->select($value);
      }
      // $this->db->select('*');
      $this->db->from('ap_gallery_list_product a');
      $this->db->join('ap_gallery_list_supplier b', 'b.id=a.gallery', 'left');
      $this->db->where('a.product', ''.$product.'');
      $this->db->where('a.status', 1);
     $query = $this->db->get();
     if($query->num_rows() > 0) {
          foreach($query->result() as $row) {
            $data[] = $row;
            $file_nameQR = $row->b_company."/".$row->b_directory."/".$row->b_gallery; 
            $remote_file_url = 'http://www.t-booking.com/uploads/gallery_list_supplier/'.$file_nameQR;       
            if (!is_dir('pic/'.$row->b_company.'/'.$row->b_directory.'/')) {
              mkdir('pic/'.$row->b_company.'/'.$row->b_directory, 0755, true);     
            }        
            $local_file = 'pic/'.$row->b_company.'/'.$row->b_directory.'/'.$row->b_gallery;
              file_put_contents($local_file, file_get_contents($remote_file_url));
          }       
    }else{
      $data['status'] = '402';

    }
 
    return $data;
  }

}//end
?>


            	