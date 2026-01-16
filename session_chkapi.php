<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
//session_start();
//$_SESSION['username'] = 'JohnDoe';
//header('Content-Type: application/json');
//echo json_encode(array(["id"=>"1",'name' => $_SESSION['username']]));

$arr[]=array("id"=>"1","name"=>"小林新作");
$arr[]=array("id"=>"2","name"=>"小林和美");
$arr[]=array("id"=>"3","name"=>"小林航太朗");
//echo json_encode(array(["id"=>"1","name"=>"小林新作"],["id"=>"2","name"=>"小林航太朗"]));
echo json_encode($arr);
?>
