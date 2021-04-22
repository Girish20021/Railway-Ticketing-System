<html>
    <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
            Passenger Details
        </title>
        <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
            document.getElementById('logo').setAttribute('draggable', false);
        </script>
        <style type="text/css">
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url(travel.png);
            background-position: center;
            background-size: cover;
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
             .seats{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
    
        }
        form{
            padding: 10px;
           text-align: center;
        }
        #name{
            width: 100%;
            height: 100px;
        }
        .name{
            margin-left: 25px;
            margin-top: 30px;
            color: white;
            font-size: 18px;
            font-weight: 700;
            
        }
        .firstname{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 0px solid #999;
            outline:none;
            
            
        }
        .lastname{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
            
        }
        
        .Age{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
    
        }
        .number{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-bottom: 0px solid #999;
            outline:none;
        }
        .id{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 0px solid #999;
            outline:none;
            
        }
        button{
            background-color: #3baf9f;
            width: 30%;
            padding:10px 10px;
            margin:5px 0;
            border-right: 30px;
            border-bottom: 0px solid #999;
            border-radius: 15px;
            outline: none;
            color: white;
            cursor: pointer;
            transition: 0.25px;
        }
        button:hover{
            background-color: #5390f5;
        }

        .firstname,.lastname,.Age,.number,.id,.seats {
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
        }
        body, html{     
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;  
}

a {
    user-select: none;
    -webkit-user-drag: none;
}

             </style>
    </head>
    <body>
        <ul id='Main Menu'>
            <li><a href="home.php" target="_self">Home</a></li>
            <li><a href="pnr.php" target="_blank">PNR Status</a></li>
            <li><a href="book.php" target="_blank">Book Your Seat</a></li>
            <li><a href="contact.php" target="_blank">Contact Us</a></li>
	    <li><a href="logout.php" target="_blank">Logout</a></li>
        </ul>
        <br>
        <div style="text-align: center; color: #993300;"><span><h1>PassengerDetails</h1></span></div><br><br>
            <form action = "detailsaction.php" method = "POST">
                <div id="name">
                <input class="seats" type="text" name="first_name" placeholder="&#xf2ba;  First Name" required ><br><br>
                 <input class="firstname" type="text" name="last_name" placeholder="&#xf2ba;  Last Name" required><br><br>
                 
                </div> <br>
                <input class="Age" type="number" name="age" placeholder="&#xf234;  Age" required><br><br>
                <input class="number" type="text" name="mobilenumber" placeholder="&#xf095;  Mobile Number" required><br><br>
                <input class= "id" type="text" name="IDNumber" placeholder="&#xf2c3;  Identity Number" required><br><br>
                <button class="button" type="submit" name="submit">Book Tickets</button> <br> <br> <br>
    </body>
</html>