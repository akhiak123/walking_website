<?php
 $host= 'localhost'; 
$user= 'root';
$pwd= '';
$db= 'walking_registration'; 
 $conn=new mysqli($host,$user,$pwd,$db); 
 if($conn->connect_error) { 	
     	die("connection failed".$conn->connect_error); 	} 
         	else 	{ 		
                  //echo "connected succesfully";  
                  }   ?>