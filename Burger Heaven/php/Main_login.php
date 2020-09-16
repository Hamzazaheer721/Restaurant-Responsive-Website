<?php include('login.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <style>
        body{
            font-family: Arial;
            margin: 0;
            background: url(../img/bg2\(11\).jpg)center/cover fixed no-repeat;
        }
        .row1{
            display:flex;
            padding:10px;
            color:white;
            margin: 20px;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-style: italic;
            font-weight: bold;
        }
        .row2{
            display:flex;
            padding: 15rem;
            justify-content: center;
            justify-items: center;
            align-content: center;
        }
        #form1{
         
            padding: 40px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-content: center;
            width: 50%;
            font-size: large;
        }
        input{
            height: 35px;
            font-size:large;
            border-radius: 20px;
            text-align: center;
        }
        .labels{
            display:flex;
            flex-direction: column;
            margin-right: 30px;
            flex:1;
            padding:10px;
            color:white;
            font-size:35px;
        }
        .fields{
            flex:1;
            display: flex;
            margin-left: 30px;
            flex-direction: column;
            align-content: space-between;
            padding: 10px        
        }
        input:valid{
        background-color: greenyellow;
        color: black;
        }

        input:invalid{
        background-color: red;
        color: white;
        }
        .submits{
            margin-top: 10px;
            margin-bottom: 10px;
            flex-basis: 100%;
            margin-left: 30%;
        }
        #sub{
            box-sizing: content-box;
            -webkit-box-sizing: content-box;
            background-color: bisque;
            border: 2px solid black;     
            font-size: medium;
        }
        #sub:hover {
            background-color: #ddd;
            color: black;
        }
        #super{
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        a {
            background-color: bisque;
            font-size: medium;
            text-decoration: none;
            display: inline-block;
            border: 2px solid black;
            padding: 2px 4px;
            color:black;
        }
        a:hover {
            background-color: #ddd;
            color: black;
        }
        
        #row3{
            display:flex;
            padding:50px;
            background-color: black;
            margin: 20px;
            align-items: center;
            justify-content: center;
            font-size: larger;
            color: white
        }
        @media screen and (min-width: 1280px)  {
            #form{
                background-color: gainsboro;
                width: 50%;
            }
        }
        @media screen and (max-width: 1024px) {
            #form{
                background-color: gray;
                width: 100%;
            }
            input{
            height: 10px;
            font-size:small;
            }
            .labels{
                display:flex;
                flex-direction: column;
                margin-right: 30px;
                flex:1;
                padding:10px;
                color:white;
                font-size:small;
            }   
        }
       
    </style>
</head>
<body>
    <div class="row1">
        <p> Login Menu </p>
    </div>
    <div class="row2">
        <?php if (isset($_SESSION['User'])): ?>
            <a href="logout.php?logout" class="next">Log Out </a>
        <?php endif ?>
        <?php if (!isset($_SESSION['User'])): ?>
            <form id = "form1" method="post" action="Main_login.php" >
            <div  class="labels"  >           
                <label for="uname" style="margin-bottom:20px">User Name:</label>
                <label for="pass" style="margin-bottom:20px">Password:</label>
               
            </div>
            <div class="fields">
                <input type="text" id="uname" name="uname" required placeholder="Type here" style="margin-bottom:20px">
                <input type="password" name="password"  required  id="pass" style="margin-bottom:20px">
                <?php
                    if(isset($error)){
                        echo '<span id ="super" style = "margin-bottom:20px; color: white;">'. $error .'</span>';
                    }
                ?>
            </div>
            <div class="submits">
                <input style = "padding: 4px; margin-right: 20px; border-radius: 20px;" id = "sub" type="submit" name='submit' value="Log In" >
                <a  style = "padding:10px; margin-right: 20px;  border-radius: 20px;" href="signup.php" class="next"  >Sign Up </a>
                <a style = "padding:10px;  border-radius: 20px;" href="c_password.php" class="previous" > Change Password</a>
            </div>
          </form>
        <?php endif ?>
    </div>
  
</body>
</html>
