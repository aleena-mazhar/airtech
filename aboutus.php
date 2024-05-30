<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirTech '24 - Pakistan's Largest Technical Olympiad</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .content {
          max-width: 1260px;
          margin: auto;
          background: whitesmoke;
          padding: 10px;
        }
    
        .row {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
        }
    
        .column {
          flex: 0 0 calc(33.3% - 16px);
          margin: 8px;
          padding: 0 8px;
          box-sizing: border-box;
          text-align: center;
        }
    
        .card {
          box-shadow: 0 4px 8px 0 rgba(3, 2, 2, 0.363);
          margin: 8px;
          width: 100%;
        }
    
        .container {
          padding: 0 16px;
        }
    
        .about-section {
          padding: 50px;
          text-align: center;
          background-color: rgb(132, 132, 94);
          color: white;
        }
    
        .title {
          color: grey;
        }
    
        .button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #3c3232;
          text-align: center;
          cursor: pointer;
          width: 100%;
        }
    
        .button:hover {
          background-color: #555;
        }
    
        @media screen and (max-width: 650px) {
          .column {
            width: 100%;
            display: block;
          }
        }
      </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.jpg" alt="AirTech Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="sponsors.php">Sponsors</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    
                </ul>
                <a href="user.php" class="btn">Register Now</a>
            </nav>
        </div>
    </header>
    <body style="background-color: white;">
        <div class="content">
          <div class="about-section ">
            <h1>About Us </h1>
            <p>Welcome to AirTech, the premier technology event hosted by Air University.
                 At AirTech, we bring together the brightest minds and the most innovative talents in computer science, engineering, 
                 and sports for a series of thrilling competitions and enriching experiences. Our event is designed to challenge, inspire, and 
                 showcase the skills of students and professionals alike, fostering a spirit of innovation and excellence.
                  With a diverse range of activities and contests, AirTech is not only a platform for competition but also a
                   vibrant community where ideas flourish and future leaders emerge. Join us at AirTech and be a part of a 
                   transformative journey in technology and beyond.</p>
          </div>
           <br>
          <h2 style="text-align:center">MEET OUR TEAM</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="aleena.jpg" alt="aleena" style="width:100%">
                <div class="container">
                  <h2>ALeena Mazhar

                  </h2>
                  
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <img src="misbahh.jpg" alt="MISBAH" style="width:100%">
                <div class="container">
                  <h2>Syeda Misbah Ali Shah</h2>
                  
                  
                
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    <footer class="footer-1">
        <div class="container">
            <p>©2024 AirTech '24. All Rights Reserved | Powered By AirTech</p>
        </div>
    </footer>
</body>
</html>