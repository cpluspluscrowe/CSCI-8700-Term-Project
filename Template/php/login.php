<!DOCTYPE html>

<html>
    <?php 
include "header.php";
?>  
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/mav.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/mockup.css">-->
    <script src="../script/jquery-3.1.0.js"></script>
    <script src="../script/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            p{
            color: blue;
            font-weight: bold;
            font-size: 50px;
            margin: 0 0 0 70px;
          }
        </style>
    </head>
    <body>
        <center>
  <p>Log In</p>
<table>
<form accept="loging.php" method="POST">
<tr>
<td>Email:</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="Password" name="password"></button></td>
</tr>
<tr>
<td></td>
<td><center><a href="loging.php"><button type="Button" class="btn btn-success btn-lg">Submit</button></td>
</tr>
</form>
</table>
</center>
    </body>
</html>
 <?php
include "footer.php";

?>  
