<html>
    <head>
        <title>Change Password</title>
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
        .main{
            padding: 175px 100px;
            width: 400px;
            /*background-color: rgba(0,0,0,0.3);*/
            margin: auto;
            margin-right: 350px;
            color: #FFFFFF;
            /*padding: 10px 0px 10px 0px;*/
            text-align: center;
            border-radius: 15px 15px 15px 15px;

        }
        .currentPassword{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 30px;
            outline:none;
            
            
        }
        .newPassword{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            outline:none;
        }
        .confirmPassword{
            width:35%;
            padding:10px 10px;
            margin:5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            outline:none;
        }
        .currentPassword,.newPassword,.confirmPassword,.submit{
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
        

a {
    user-select: none;
    -webkit-user-drag: none;
}
        </style>
    </head>
    
<body>
    <div class="main">
<h1 align="center">CHANGE PASSWORD</h1>

<form align="center" action="cpassaction.php" method="POST">
    <div id="ino">
<input class="currentPassword" type="text" name="username" placeholder="&#xf084;  username" required>
<br><br>
<input class="currentPassword" type="password" name="currentPassword" placeholder="&#xf084;  Password">
<br><br>
<input class="newPassword" type="password" name="newPassword" placeholder="&#xf084;  New Password">
<br><br>
<input class="confirmPassword" type="password" name="confirmPassword" placeholder="&#xf084; Confirm Password">
<br><br>
<input class="submit" type="submit" name="submit"  value=" &#xf1d8;  SUBMIT"> <br> <br>
</div>
</form>
<br>
<br>
</div>
</body>
</html>