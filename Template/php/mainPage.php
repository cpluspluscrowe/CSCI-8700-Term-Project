<!DOCTYPE html>
<html lang="en">
    <?php 
        include "header.php";
    ?> 
<head>
  <title>Main Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/mockup.css">
  <script src="../script/jquery-3.1.0.js"></script>
  <script src="../script/script.js"></script>

</head>
	<body>
		<div class="content">
		  <h1>Main Page</h1>
		  <p>Map Display</p> 
		
			<div>
				<h4> Display parking locations:
					<select id="parkingSelect">
						<option selected="selected">Parking lot</option>
						<option value="parkingStall.php">Thomson Alumni</option>
						<option value="parkingStall.php">Milo Bail</option>
						<option value="parkingStall.php">ASH</option>
						<option value="parkingStall.php">HPER</option>
					</select>
				</h4>
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.8944879885157!2d-96.01075410935805!3d41.25686999065005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4dbea6a55857784f!2sUniversity+of+Nebraska+Omaha!5e0!3m2!1sen!2sus!4v1474330612666" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
				</iframe>

			</div>
		</div>
	</body>
</html>
 <?php
include "footer.php";
?> 