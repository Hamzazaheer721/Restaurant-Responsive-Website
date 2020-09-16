<?php include('c_pass_check.php') ?>
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
            border-radius:15px;
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
            background-color: bisque;
            border: 2px solid black;
            font-size: medium;
            box-sizing: content-box;
            -webkit-box-sizing: content-box;
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
        <p> Change Password menu </p>
    </div>
    <div class="row2">
        <form id = "form1" method="post" action="c_password.php" >
            <div  class="labels"  >           
                <label style="margin-bottom:20px" for="uname">User Name:</label>
                <label style="margin-bottom:20px" for="old_pass">Old Password:</label>
                <label style="margin-bottom:20px" for="new_pass">New Password:</label>
               
            </div>
            <div class="fields">
                <input style="margin-bottom:20px" type="text" id="uname" name="uname" required placeholder="Type here">
                <input style="margin-bottom:20px" type="password" name="oldpassword"  required  id="old_pass">
                <input style="margin-bottom:20px" type="password" name="newpassword" pattern = "^(?=(.*\d){1})(?=(.*[A-Z]){1})(?=(.*[a-z]){1})(?=(.*[!@#$%]){1})[0-9a-zA-Z!@#$%]{6,10}$" required oninvalid="setCustomValidity('Password should have atleast 1 ASCII character, digit, lower letter and Upper letter having min. length 6 and max. length as 10')" required  id="new_pass">
                <?php if (isset($error)): ?>
                <span id ="super" style = "margin-bottom:20px; color: white;"><?php echo $error; ?></span>
                <?php endif ?>
            </div>
            <div class="submits">
                <a style = "padding:10px; margin-left:50px; margin-right: 60px; border-radius:20px;" href="Main_login.php" class="previous"> Back </a>
                <input style = "padding: 3px; margin-right: 20px; border-radius: 20px;" id = "sub" type="submit" name='submit' value="Change Password">
            </div>
          </form>
    </div>

  
</body>
</html>
