<?php
include_once("functions.php");
$fundcode=$_GET['code'];
$data = getData($fundcode);
$json = json_encode($data);
echo $json;
?>