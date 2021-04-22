<html>
    <head>
        <title>Ticket Cancellation</title>
        <style type="text/css">
         @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
            *{
                margin: 0;
                padding: 0;
            }
            body{
                    background-image: url(train4.jpg);
                    background-repeat: no-repeat; 
                    background-size: cover;
                    height: 500px;
                    font-family: 'Montserrat', sans-serif;
                    font-weight: 700;
                    letter-spacing: 1.4px;
                }
            .main {
                width: 700px;
                height: 400px;
                margin: 0 auto;
                margin-top: 30px;
                color: white;
                }
            .main h1{
                padding: 10px 150px;
                margin-left: 30px;
                color: orange;
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
        .tid{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            border-bottom: 0px solid #999;
            outline:none;
            
            
        }
        .tid, .submit{
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
        }
        .submit {
            width:35%;
            font-size: medium;
            padding:10px 10px;
            margin:5px 0;
            background-color: #6495ED ;
            border-radius: 15px;
        }
        .submit:hover{
            cursor: pointer;
            color:white;
            background-color: #000080;
        }
                </style>
    </head>
    <body>
        <div class="main"><br>
            <h1>Ticket Cancellation</h1>
        </div>
        <form action="cancelaction.php" method="POST">
            <div class="name">
                <input class="tid" type="int" name="ticketid" placeholder="&#xf145;  Ticket ID" required><br><br>
                <input class="submit" type="submit"  name = "submit" value="&#xf2b5; Submit"> <br> <br>
            </div>
        </form>

        </div>
    </body>
</html>