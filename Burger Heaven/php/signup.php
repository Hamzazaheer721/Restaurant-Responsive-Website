<?php include('insertData.php')?>
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
            background-color: bisque;
            box-sizing: content-box;
            -webkit-box-sizing: content-box;    
            border: 1px solid black;
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
        <p> Sign Up Menu</p>
    </div>
    <div class="row2">
        <form id = "form1" method="post" action="signup.php" >
            <div class="labels">
                <label for="fname" style= "margin-bottom: 20px;">First name:</label> 
                <label for="lname" style = "margin-bottom:20px">Last name:</label> 
                <label for="uname" style = "margin-bottom:20px">User Name:</label>
                <label for="num" style = "margin-bottom:20px">Mobile Number:</label>
                <label for="email" style = "margin-bottom:20px">Email:</label>
                <label for="pass" style = "margin-bottom:20px">Password:</label>
            </div>
            <div class="fields">
                <input style = "margin-bottom:20px" type="text" id="fname" name="fname" pattern = "^[a-zA-Z]{3,8}$" required oninvalid="setCustomValidity('Numbers are not allowed in First Name field')" placeholder="Type here">
                <input style = "margin-bottom:20px" type="text" id="lname" name="lname" pattern = "^[a-zA-Z]{3,8}$" required oninvalid="setCustomValidity('Numbers are not allowed in Last Name field')" placeholder="Type here"> 
                <input style = "margin-bottom:20px" type="text" id="uname" name="uname" pattern = "^(?=(.*\d){1})[a-zA-Z]\w{3,9}$" oninvalid=" setCustomValidity('User Name should be Alphanumeric having atleast one number with first letter starting with any Alphabet while having min. length 4 and max. length as 10')" required placeholder="Type here">
                <input style = "margin-bottom:20px" type="text" id="num" name="num" pattern = "^03[0-4]{2}\d{7}$" required oninvalid="setCustomValidity('Phone Number must be numeric of length 11 with starting letters 03 and third letter between 0-4')" placeholder="Type here">
                <input style = "margin-bottom:20px" type="text" name= "email" id="email" pattern = "^([a-zA-Z0-9\.-_]+)@([a-z0-9\.-]{5,20})(\.[a-z]{3,8})(\.\w)*$" required oninvalid="setCustomValidity('Enter valid email')" placeholder="Type here">
                <input style = "margin-bottom:20px" type="password" name="password" pattern = "^(?=(.*\d){1})(?=(.*[A-Z]){1})(?=(.*[a-z]){1})(?=(.*[!@#$%]){1})[0-9a-zA-Z!@#$%]{6,10}$" required oninvalid="setCustomValidity('Password should have atleast 1 ASCII character, digit, lower letter and Upper letter having min. length 6 and max. length as 10')" id="pass">
                <?php if (isset($error)): ?>
                <span id ="super" style = "margin-bottom:20px; color: white;"><?php echo $error; ?></span>
                <?php endif ?>
            </div>
            <div class="submits">
                <a style = "margin-right:140px; padding:10px;  border-radius: 20px;" href="Main_login.php" class="previous"> Back </a>
                <input id = "sub" type="submit" name='submit' value="Make account">
            </div>
          </form>
    </div>
                  
</body>
</html>