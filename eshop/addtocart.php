<?php
$pid=$_GET["pid"];
if(isset($_COOKIE["BASKET"]))
{
	$s=$_COOKIE["BASKET"];
	setcookie("BASKET",$s."#".$pid,time()+(7*24*60*60));
}
else
{
	setcookie("BASKET",$pid,time()+(7*24*60*60));
}
header("location:products.php");
?>