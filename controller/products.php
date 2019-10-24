<?php

$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';

$userid= $_GET['uid'];
$final=array();
$elem= array(
  'title'=> '',
  'status'=>'',
  'wp'=>'',
  'rp'=>'',
  'img'=>'',
  '_stock_status'=> '',
);

$results= $wpdb->get_results(
    "SELECT * FROM wp_posts WHERE post_type= 'product'and post_status!= 'trash' and post_status!= 'auto-draft' and post_author= '$userid' order by post_date desc"

);

foreach ( $results as $result ) 
{
    $elem['title'] = $result-> post_title;
    $elem['status']= $result-> post_status;
    $productid= $result-> ID;
    $meta_regular_price= $wpdb->get_results("SELECT * FROM wp_postmeta WHERE post_id= '$productid' AND meta_key= '_regular_price' ")[0]-> meta_value ;
    $meta_wholesale_price= $wpdb->get_results("SELECT * FROM wp_postmeta WHERE post_id= '$productid' AND meta_key= 'wholesale_customer_wholesale_price' ")[0]-> meta_value;
    
    $elem['wp']= $meta_wholesale_price;
    $elem['rp']=$meta_regular_price;
    $elem['_stock_status']= $wpdb->get_results("SELECT * FROM wp_postmeta WHERE post_id= '$productid' AND meta_key= '_stock_status' ")[0]-> meta_value ;


   $meta_thumbnail_id= $wpdb->get_results("SELECT * FROM wp_postmeta WHERE post_id= '$productid' AND meta_key= '_thumbnail_id' ")[0]-> meta_value ;
    
   $tmp_img=$wpdb->get_results(
        "SELECT * FROM wp_posts WHERE ID='$meta_thumbnail_id' order by post_date desc"
    )[0];
    
    $elem['img']=$tmp_img->guid;
 
 
       array_push($final, $elem);


}


header('Content-Type: application/json');
echo json_encode ($final);
