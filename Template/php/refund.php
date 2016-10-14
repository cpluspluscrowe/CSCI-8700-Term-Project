<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <?php 
include "HF/header.php";
?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <center>
<table  align="center" border="0">
	 <form action="http://localhost/Forum/forum.php " method="POST">
	  <tr>
	 <td>From:</td>
	 <td><input type="text" name="" style="color:black;"></td>
	 </tr>
	 <tr>
	 <td>UserName:</td>
	 <td><input type="text" name="" style="color:black;"></td>
	 </tr>
	 <tr>
	 <td>Subject:</td>
	 <td><select style="color:black;">
	 <option value=""></option>
	 <option value="sekect">------Select a subject------</option>
  <option value="refund">Refund Request</option>
  <option value="cancel">Cancellation Request</option>
</select></td>
	 </tr>
		<tr>
              <td>Complaint:</td>
                <td><textarea name="message" rows="10" cols="50" style="color:black;"></textarea></td>
            </tr>
            <tr>
            <td> </td>
            <td><button type="Button" class="btn btn-success btn-lg">Submit</button></td>
            </tr>
	</form>
</table>
</center>
    </body>
</html>
<?php
include "HF/footer.php";
?>  
