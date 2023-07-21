<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CONTACTS</title>
    <link rel="stylesheet" href="style.css">
  
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
</div> 
  
  <div id="rightcol">
    <div style="max-width: 300px; padding: 20px; border-style: solid; border-radius: 14px;">
      <h2>FOR MORE INFORMATION</h2><br><br>
      <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["mycontacts"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>





        
  </div>
  
  </div>
 

      <div id="leftcol">
        <div style="max-width: 300px; padding: 20px; border-style: solid; border-radius: 14px;">
          <h2>Contact Us</h2>
          <form action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <input type="submit" value="Submit">
          </form>
      </div>
      </div>
      <div id="footer">
        <p>Copyright&copy;2023; Designed by <span class="designer">Raphael</span></p>
    </div>
    
      

     
</body>
</html>