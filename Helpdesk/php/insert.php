<?php

require 'config.php';

$lecname=$_POST['upload_by'];
$lecID=$_POST['lecturer_id'];
$lecemail=$_POST['email'];
$resoname=$_POST['resource_name'];
$resotype=$_POST['resource_type'];
$uploaddate=$_POST['upload_date'];

$sql ="INSERT INTO resour(upload_by,lecturer_id,email,resource_name,resource_type,upload_date) VALUES 
('$lecname','$lecID','$lecemail','$resoname','$resotype','$uploaddate')";

if($conn->query($sql))
{
    echo"<script>alert('Click Ok for view Resource Details')</script>";
    echo"<script>window.location.href='read.php';</script>";
}
else{
    echo "Error".$conn->error;
}

$conn->close();

?>