<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="../css/styleform.css"/>
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
                <li><a href='home.php'>HOME</a></li>
                <li>DASHBOARD</li>
                <li>KNOWLADGEBASE</li>
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
        <h3>Resource Details</h3><br>
        <form id="myForm" method="post" action="insert.php" onsubmit="submitForm(event)">

            <label for="upload_by">Upload By:</label>
            <input type="text"  name="upload_by" required size="50"><br><br>

            <label for="lecturer_id">Lecture ID:</label>
            <input type="text"  name="lecturer_id"   required size="50"><br><br>

            <label for="email">E-mail:</label>
            <input type="text"  name="email" required size="50"><br><br>

            <label for="resource_name">Resource Name:</label>
            <input type="text"  name="resource_name" required size="50"><br><br>

            <label for="resource_type">Resource Type:</label>
            <select name="resource_type">
                <option value="document">Document</option>
                <option value="video">Video</option>
                <option value="article">Article</option>
            </select><br><br>
            <label for="upload_date">Upload Date:</label>
            <input type="datetime-local"  name="upload_date" required size="50"><br><br>

            <button type="submit" class="submitbtn">Submit</button>
          
        </form>
        
        </div>
        <div class="popup" id="popup">
            <img src="../image/tick.jpg" >
            <h2>Thank you!</h2>
            <p>Your details have been successfully submitted. Thanks</p>
            <button type="button" class="btn" onclick="closePopup()">OK</button>
        </div>
    
    <script src="../js/script.js"></script>
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