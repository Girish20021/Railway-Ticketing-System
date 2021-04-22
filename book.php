<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Ticket Reservation</title>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-image: url(train.jpg);
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
            /*.Resevere{
                width: 800px;
                background-color: rgba(0,0,0,0.6);
                margin: auto;
                padding: 10px 0px 10px 0px;
                text-align: center;
                border-radius: 15px 15px 15px 15px;
                color: bisque;
            }*/
            .main{
           /* background-color: rgb(0,0,0,0.4);*/
            width:800px;
            text-align: center;
            color: white;
            margin: auto;
            margin-right: 125px;

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
            margin-left: 0px;
            margin-top: 30px;
            color: white;
            font-size: 18px;
            font-weight: 700;
            
        }
        .from{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 1px solid #999;
            outline:none;
        }
        .to{
            width:35%;
            padding:10px 10px;
            padding-left: 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 1px solid #999;
            outline:none;
        }
        .date-of-journey{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 1px solid #999;
            outline:none;
        }
        #Category{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 1px solid #999;
            outline:none;
        }
        
        .radio {
          margin: 10px;
          color: black;
        }
       .radio input[type="radio"] {
         opacity: 0;
         position: fixed;
         width: 0;
        }
        .radio label {
          display: inline-block;
          background-color: #ddd;
          padding: 10px 20px;
          font-family: sans-serif, Arial;
          font-size: 16px;
          border: 2px solid #444;
          border-radius: 4px;
        }
        .radio label:hover {
            color: black;
           background-color: #dfd;
        }
        .radio input[type="radio"]:focus + label {
          border: 2px dashed #444;
        }
        .radio input[type="radio"]:checked + label {
          color: black;
          background-color: #bfb;
          border-color: #4c4;
        }
        #classes{
            display: inline-block;
            background-color: #ddd;
            padding: 10px 20px;
            font-family: sans-serif, Arial;
            font-size: 16px;
            border: 2px solid #444;
            border-radius: 4px;
        }
        #submit{
            height: 35px;
            width: 100px;
            margin-left: 25px;
            color: cornsilk;
            background-color: coral;
            border-radius: 15px;
        }
        #submit:hover{
            cursor: pointer;
            color: black;
            background-color: lavenderblush;
        }
        #fafa:hover{
            cursor: pointer;
        }

            </style>
            <script type="text/javascript">

                function swap_content()
                {
                    var tmp = document.getElementById('from').value;
                    document.getElementById('from').value = document.getElementById('to').value;
                    document.getElementById('to').value = tmp;
                }

            </script>
    </head>
    <body>
        <ul id='Main Menu'>
            <li><a href="home.php" target="_self">Home</a></li>
            <li><a href="pnr.php" target="_blank">PNR Status</a></li>
            <li><a href="Book A Ticket.html" target="_blank">Book Your Seat</a></li>
            <li><a href="contact.php" target="_blank">Contact Us</a></li>
	    <li><a href="logout.php" target="_blank">Logout</a></li>
        </ul>
        <br>
        <div class="main"> <br>
            <div><h1>Book Your Ticket</h1></div>
            <form action="bookaction.php" method ="POST">
                <div class="name">
                    <input id ="from" class="from" type="text" name="from" placeholder="From" required><br>
                    <i id = "fafa" class="fa fa-exchange fa-rotate-90" aria-hidden="true" onclick="swap_content()"></i><br>
                    <input id = "to" class="to" type="text" name="to" placeholder="To" required>
                </div>
                <br>
                <input class="date-of-journey" type="date" name="doj" placeholder="date-of-journey" ><br><br>

                <select id="Category" name="category">
                <option value="general">General</option>
                <option value="ladies">Ladies</option>
                <option value="lower berth/sr.citizen"> LOWER BERTH/SR.CITIZEN</option>
                <option value="tatkal">Tatkal</option>
                <option value="premium-tatkal">Premium Tatkal</option>
                </select><br><br>


    <select id="classes" name="classes">
        <option value="All Classes">All Classes</option>
        <option value="Anubhuti Class">Anubhuti Class</option>
        <option value="AC First Class">AC First Class</option>
        <option value="Exec. Chair Car">Exec. Chair Car</option>
        <option value="AC 2 Tier">AC 2 Tier</option>
        <option value="First Class">First Class</option>
        <option value="AC 3 Tier">AC 3 Tier</option>
        <option value="AC 3 Economy">AC 3 Economy</option>
        <option value="AC Chair Car">AC Chair Car</option>
        <option value="Sleeper">Sleeper</option>
        </select>
    <div class="radio"> <br>
        <input type="radio" id="one" name="ans" value="Flexible With Date">
        <label for="one">Flexible With Date</label>
        <input type="radio" id="two" name="ans" value="Train With Available Berth">
        <label for="two">Train With Available Berth</label>
    </div> 
    <input id="submit" type="reset" name="Reload">
    <button id = "submit" name="submit">SUBMIT</button><br><br>

            </form>

        </div>
    </body>
</html>
