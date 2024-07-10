<?php session_start(); 
$_SESSION['wtname']='';
$cmpny=$_SESSION['wtcmpny'];
if($cmpny=='Laxmi Bakery'){
	header("Location:Login.php");
}
else{
	header('Location:login.php');
}
?>