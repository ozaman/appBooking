<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.
require_once("includes/class.mysql.php");

header('Content-Type: application/json; charset=utf-8');

$input = filter_input_array(INPUT_POST);

//$mysqli = new mysqli('localhost', 'root', '123', 'admin_dddtrip');
$db = New DB();
$db->connectdb('admin_dddtrip','admin_dddtrip','252631@dotdotdottrip');
$current_date = $current = date('Y-m-d h:i:s');
mysql_query("SET NAMES utf8"); 
mysql_query("SET character_set_results=utf-8"); 
	
/*if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}
*/
if ($input['action'] === 'edit') {
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET character_set_results=utf-8"); 
  // $mysqli->query("UPDATE ap_language  SET s_eng ='" . $input['English'] . "', s_cn='" . $input['China'] . "', s_th='" . $input['Thai'] . "' WHERE i_id='" . $input['Id'] . "'");
 	$edit[s_eng] = $input['English'];
   	$edit[s_cn] = $input['China'];
   	$edit[s_th] = $input['Thai'];
   	$edit[d_last_update] = $current_date;
    $db->update_db("ap_language",$edit,"i_id = '".$input['Id']."' "); 
} 

else if ($input['action'] === 'delete') {
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET character_set_results=utf-8"); 
//    $mysqli->query("UPDATE ap_language  SET i_deleted=1 WHERE i_id='" . $input['Id'] . "'");
   	$delete[i_deleted] = 1;
   	$delete[d_last_update] = $current_date;
    $db->update_db("ap_language",$delete,"i_id = '".$input['Id']."' "); 
} 

else if ($input['action'] === 'restore') {
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET character_set_results=utf-8"); 
//    $mysqli->query("UPDATE ap_language  SET i_deleted=0 WHERE i_id='" . $input['Id'] . "'");
	$restore[i_deleted] = 0;
   	$restore[d_last_update] = $current_date;
    $db->update_db("ap_language",$restore,"i_id = '".$input['Id']."' "); 
}

//mysqli_close($mysqli);

echo json_encode($input);
//echo $input['Thai'];
