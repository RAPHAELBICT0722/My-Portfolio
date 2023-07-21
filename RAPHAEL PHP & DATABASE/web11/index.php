<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>chiona.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="homepage.js"></script>
</head>
    
    <body>
    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "raphael";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>


        <div class="h1">
        <h1>RAPHAEL CHIONA</h1> 
    </div>  
    <div class="menu-bar">
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="Contact.php">Contact</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="skills.php">Skills</a></li>
            
        </ul>
    </div>
        <div class="halla">
                    <script>
                        var welcome;
                        var date = new Date();
                        var hour = date.getHours();
                        var minute = date.getMinutes();
                        var second = date.getSeconds();
                        if (minute < 10){
                            minute = "0" + minute;
                        }
                        if (second < 10){
                            second = "0" + second;
                        }
                        if (hour < 12){
                            welcome = "Good Morning";
                        }
                        else if (hour < 17){
                            welcome = "Good Afternoon";
                        }
                        else {
                            welcome = "Good Evening";
                        }
                        document.write("<h2>" + welcome + " " + "& Welcome!" +"<br>" + "<br>");
                    </script>
                </div>
        <Section>

         
</Section>

<div class="wrapper">
    <div class="home_area">
        <div class="home_text">
<img src="rapha.jpg" alt="" srcset="">
<h2>RAPHAEL CHIONA</h2>

    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>


<a href="Contact.html">Contact Me</a><br>
<a href="Projects.html">Projects</a>
        </div>
    </div>
</div>
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radiobtn" id="radio1">
                <input type="radio" name="radiobtn" id="radio2">
                <input type="radio" name="radiobtn" id="radio3">
                <input type="radio" name="radiobtn" id="radio4">

                <div class="slide first">
                    <img src="project.jpg" width="20%" alt="">
                </div>

                <div class="slide">
                    <img src="project2.jpg" width="20%" alt="">
                </div>

                <div class="slide">
                    <img src="skills.jpg" width="20%" alt="">
                </div>

                <div class="slide">
                    <img src="router.jpg"  width="20%" alt="">
                </div>

                <div class="navigationauto">
                    <div class="autobtn1"></div>
                    <div class="autobtn2"></div>
                    <div class="autobtn3"></div>
                    <div class="autobtn4"></div>
                </div>

            </div>

            <div class="navigationmanual">
                <label for="radio1" class="manualbtn"></label>
                <label for="radio2" class="manualbtn"></label>
                <label for="radio3" class="manualbtn"></label>
                <label for="radio4" class="manualbtn"></label>
            </div>

        </div>


<div id="footer">
    <p>Copyright&copy;2023; Designed by <span class="designer">Raphael</span></p>
    <a class="btn icon" href="https://facebook.com/RaphaelNdateloChionaRalph" target="_blank"><i class="fa fa-facebook"></i></a>
    <a class="btn icon"href="https://wa.me/+265991051464" target="_blank"><i class="fa fa-whatsapp"></i</a>
    <a class="btn icon"href="https://ralphchiona479870@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i</a> 
</div>
    

    
</body>
</html>