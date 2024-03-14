<?php
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>
    <div id="form">
        <center>
        <h1>Croki's Inventory</h1>
</center>
        <form name = "form" action= "login.php"method = "POST">
            <label>Firstname: </label>
            <input type="text" id="fname" name="fname"> </br></br>
            <label>Lastname: </label>
            <input type="text" id="lname" name="lname"> </br></br>
            <label>Age: </label>
            <input type="text" id="age" name="age"> </br></br>
            <label>Address: </label>
            <input type="text" id="address" name="address"> </br></br>
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="pass" name = "pass"> </br> </br>
            <input type="submit" id="btn" value="Login" name="submit"> 
            
        </form>
    </div>
</body>
</html>