<?php
require 'config.php';
if(isset($_GET['deleteResource_id'])){
    $resourceID=$_GET['deleteResource_id'];

    $sql="DELETE FROM resour where Resource_id=$resourceID";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfull";
        header('location:read.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>