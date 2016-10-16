<!DOCTYPE html>

<html>
     <?php 
include "header.php";
?>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="../css/mav.css">
        <!--<link rel="stylesheet" type="text/css" href="../css/mockup.css">-->
        <script src="../script/jquery-3.1.0.js"></script>
        <script src="../script/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center>
<table  align="center" border="0">
	 <form action="http://localhost/Forum/forum.php " method="POST">
		<tr>
              <td>Review:</td>
                <td><textarea name="message" rows="5" cols="50" style="color:black;"></textarea></td>
            </tr>
            <tr>
            <td> </td>
            <td><button type="Button" class="btn btn-success btn-lg">Submit</button></td>
            </tr>
            <p>Star Rating</p>
<div id="stars">
<span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span>
</div>
	</form>

</table>
</center>
    </body>
</html>
<?php
include "footer.php";
?>  
