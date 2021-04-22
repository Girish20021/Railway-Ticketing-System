<html>
    <head>
        <title>Home Page</title>
        <style type="text/css">
        body{
                background-image: url(train.jpg);
                background-repeat: no-repeat; 
                background-size: cover;
                height: 500px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                letter-spacing: 1.4px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color:orange;
                text-align: right;
            }
            li {
              float: left;
              padding:10px 30px;
              margin-left:-80px;
            }
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 10px 60px;
              text-decoration: none;
             }
             li a:hover {
               background-color: #111111;
             }
             #main {
                width: 700px;
                height: 400px;
                margin: 0 auto;
                margin-top: 30px;
                color: white;
                animation-name: slide;
                animation-direction: normal;
                animation-duration: 2s;
                animation-delay: .5s;
                animation-fill-mode: backwards;
             }
             #main h1{
                padding: 10px 75px;
                animation-name: slide;
                animation-duration: 2s;
             }
             @keyframes slide{
                0%{
                    transform: translateX(1000px);
                    opacity: 0;
                }
                100%{
                    transform: translateX(0);
                    opacity: 1;
                }
             }
            footer {
                text-align: center;
                 color: whitesmoke;
                 animation-name: slide;
                animation-duration: 2s;
                animation-delay: .5s;
                animation-fill-mode: backwards;
                }
            footer h3{
                margin:10%;
                animation-name: slide;
                animation-duration: 2s;
            }

            img{
                height: 150px;
                margin-left: -400px;
                margin-top: -100px;
            }

        </style>
    </head>
    <body>
                  <ul id='Main Menu'>
                        <li><a href="home.php" target="_self">Home</a></li>
                        <li><a href="pnr.php" target="_blank">PNR Status</a></li>
                        <li><a href="book.php" target="_blank">Book Your Seat</a></li>    
                        <li><a href="contact.php" target="_blank">Contact Us</a></li>
                        <li><a href="cpass.php" target="_self">Change Password</a></li>
                        <li><a href="cancel.php" target="_blank">Ticket Cancellation</a></li>
                        <li><a href="logout.php" target="_self">Log Out</a></li>
                    </ul>
                    <div id="main">
                        <h1>WELCOME TO INDIAN RAILWAYS</h1>
                        <img src="logo.png">
                    </div>
                    <footer>
                        <h3>😊 WE WISH U A HAPPY AND SAFE JOURNEY 😊</h3>
                       </footer>
                    
    </body>
</html>