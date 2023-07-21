<!DOCTYPE html>
<html>
<head>
  <title>projects</title>
  <link rel="stylesheet" href="style.css">
  
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    header {
        text-align: center;
      background-color: none;
      padding: 20px;
      color: #000;
    }

    h1 {
      margin: 0;
    }

    main {
      padding: 20px;
    }

    .grid{
    display: grid;
    grid-template-columns: repeat(3, 350px);
    justify-content: center;
    align-items: center;
    grid-gap: 5px;
    height: 80vh;
    position: absolute;
    left:11%;
    bottom: 2%;
  }
      .grid img{
          width: 350px;
          height: 240px;
          cursor: pointer;
      }


#lightbox{
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .8);
    display: none;
    padding-top: 100px;
}
      .popup{
    width: 400px;
    background: transparent;
    backdrop-filter: blur(30px);
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%)scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
}

.open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%)scale(1);
}

.popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
}

.popup button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #00bcd4;
    color: #000;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
}


  </style>
</head>
<body>
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
  <header>
    <h1>PROJECTS</h1>
  </header>

  
    <div class="grid">
            <img src="project.jpg" onclick="openPopup()">
            <img src="project2.jpg" onclick="openPopup2()">
            <img src="team.jpg" onclick="openPopup3()">
            <img src="skills.jpg" onclick="openPopup4()">
            <img src="router.jpg" onclick="openPopup5()">
            <img src="VS.jpg" onclick="openPopup6()">

            <div class="popup" id="popup">
                <h2>Computer Repairing Services</h2>
                <p>We Offer PC Repairing Services on both Hardware & Software issues for Individuals and Organizations</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
            
            <div class="popup" id="popup2">
                <h2>Computer System Security</h2>
                <p>We offer PC System Security Services for Individuals or Organizations</p>
                <button type="button" onclick="closePopup2()">OK</button>
            </div>

            <div class="popup" id="popup3">
                <h2>Web Services</h2>
                <p>We Offer Website Development Services for Individuals and Organizations</p>
                <button type="button" onclick="closePopup3()">OK</button>
            </div>

            <div class="popup" id="popup4">
                <h2>Programming Services</h2>
                <p>We Offer Computer Programming Services for Individuals or Organizations </p>
                <button type="button" onclick="closePopup4()">OK</button>
            </div>

            <div class="popup" id="popup5">
                <h2>Computer Networking</h2>
                <p>We Offer Computer Networking Services for Individuals or Organizations </p>
                <button type="button" onclick="closePopup5()">OK</button>
            </div>

            <div class="popup" id="popup6">
                <h2>Software Development</h2>
                <p>We Offer Software Development Services for Individuals or Organizations</p>
                <button type="button" onclick="closePopup6()">OK</button>
            </div>
        </div>

     <p>CLICK ON IMAGES FOR MORE INFORMATION</p>
    <script src="projects.js"></script>
     
  
</body>
</html>