<?php
$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';
$final = array(
    'key' =>'',
    'secret'=>'',
);
$uid= $_GET['user'];
try{
$result= $wpdb->get_results(
    "SELECT ck,cs FROM keys WHERE uid='$uid'"

)[0];
}
catch(Exception $e){
    echo "Database error";
}
if ($result){
    $final['key']=$result->ck;
    $final['secret']=$result->cs;
    header('Content-Type: application/json');
    echo json_encode($final);
}
else{
    echo json_decode($final);
}

?>