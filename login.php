<html>
    <head>
        <title>
            Login Page.
        </title>
        <style type="text/css">
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
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
        
       /* .logform{
            width: 800px;
            background-color: rgba(0,0,0,0.6);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 15px 15px;
        }*/
        .main{
            padding: 55px 50px;
            width: 400px;
            background-color: rgba(0,0,0,0.3);
            margin: auto;
            margin-right: 350px;
            color: #FFFFFF;
            /*padding: 10px 0px 10px 0px;*/
            text-align: center;
            border-radius: 15px 15px 15px 15px;

        }
        
        .Username{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            outline:none;
            
            
        }
        .password{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            outline:none;
        }
        .Username,.password{
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
        #ino{
            margin-left: -150px;
            width: 700px;
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
        .submit{
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
        }

a {
    user-select: none;
    -webkit-user-drag: none;
}
        </style>
    </head>
    <body>

        <br> <br> <br> <br> <br> <br> <br>

        <div class="main">
            <div><h1>Login Page</h1> <br> <br>
                <form method='POST' action='validate.php'>
            <div id="ino">
                <input class="Username" type="text" name="User_name" placeholder="&#xf2ba;  User Name" required><br><br>
                <input class="password" type="password" name="Password" placeholder="&#xf084;  Password" required><br><br>
                <input class="submit" type="submit"  value="&#xf2b5; Submit"> <br> <br>
                <p style="color: whitesmoke;">NOT YET REGISTERED? <a href="register.php" style="color: royalblue;">Register here</a></p>
            </div>
                </form>
        </div>
    </body>
</html>