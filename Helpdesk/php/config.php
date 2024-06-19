<?php
	$severname="localhost";
	$username="root";
	$password="";
	$database="university_student_helpdesk";
	
	$conn=new mysqli($severname,$username,$password,$database);
	
	if($conn->connect_error){
		die("Connection failed!".connect_error);
	}
?>