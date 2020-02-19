<?php
session_start();

$uname = $_REQUEST['uname'];
 $email = $_REQUEST['email'];
 if(empty($uname))
 {
	 echo "not valid";
 }
 
 
   
if(isset($_REQUEST['submit'])){
	$uname = $_REQUEST['uname'];
      $email = $_REQUEST['email'];
   
   

if(empty(trim($uname)) || empty(trim($email))){
	echo "Null submit";
}

}




?>