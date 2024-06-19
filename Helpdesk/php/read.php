<html>
    <head>
        <title> details file</title>
        <link rel="stylesheet" href="../css/Restyle.css"/>
        <link rel="stylesheet" href="../css/Home.css">
    </head>
<body>
<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">WeStudy</h2>
            </div>

            <div class="menu">
                <ul>
                <li><a href="home.php">HOME</a></li>
                <li>DASHBOARD</li>
                <li>KNOWLADGEBASE</a></li>
                <li>INQUIRY</li>
                </ul>
            </div>

            <div class="login">
                <button class="hbtn">Login</button>
            </div>

            <div class="register">
                <button class="hbtn">Register</button>
            </div>
            </div>
<div class="container">
    <table>
        <tr> 
            <th>Resource ID</th>
            <th>Upload by</th>
            <th>Lecturer ID</th>
            <th>Email</th>
            <th>Resource Name</th>
            <th>Resource Type</th>
            <th>Upload Date</th>
            <th>Operations</th>
</tr>

<?php
require 'config.php';

$sql="SELECT Resource_id,upload_by,lecturer_id,email,resource_name,resource_type,upload_date FROM resour";

$result=$conn->query($sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $resourceID=$row['Resource_id'];
        $lecname=$row['upload_by'];
        $lecID=$row['lecturer_id'];
        $lecemail=$row['email'];
        $resoname=$row['resource_name'];
        $resotype=$row['resource_type'];
        $uploaddate=$row['upload_date'];

        echo ' <tr>
        <td scope="row">'. $resourceID.'</td>
        <td>'. $lecname.'</td>
        <td>'. $lecID.'</td>
        <td>'. $lecemail.'</td>
        <td>'. $resoname.'</td>
        <td>'. $resotype.'</td>
        <td>'. $uploaddate.'</td>
        <td>
        <button class="btn"><a href="update.php? updateResource_id='.$resourceID.'">Update</a></button>
        <button><a href="delete.php? deleteResource_id='.$resourceID.'">Delete</a></button>
        </td>
        </tr>';

    }
}
else
{
   echo "No Results";
}

$conn->close();
?>
</table>
</div>
<footer class="footerr">
            <p>Copyright © 2024 WeStudy. All rights reserved.</p>
            <p>Privacy Policy</p>
            <br>
            <p>Terms And Conditions</P>
            <br><br>

            <div>
                <a href="@email.com"><img src="../Image/E mail.png" alt="Email" width="50px" height="50px"></a>
                <a href="intagram.com/name"><img src="../Image/insta.jpg" alt="Instagram" width="50px" height="50px"></a>
                <a href="x.com/name"><img src="../Image/x.png" alt="X" width="50px" height="50px"></a>
                <a href="linkedin.com/name"><img src="../Image/Linkedin.png" alt="Linkedin" width="50px" height="50px"></a>
            </div>
        </footer>
</body>
</html>