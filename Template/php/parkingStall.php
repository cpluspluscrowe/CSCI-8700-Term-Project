<!DOCTYPE html>
<html lang="en">
    <?php 
        include "header.php";
    ?> 
<head>
  <title>Parking Stall Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/mockup.css">
  <script src="../script/jquery-3.1.0.js"></script>
  <script src="../script/script.js"></script>
</head>
	<body>
		<div class="content">
		<a href="mainPage.php"><button>Home Page</button></a>

		  <h1>Parking Stall Page</h1>
		  <p>Parking Location Live Map</p> 
		
			<div>
				<table align = "center">
					<tr bgcolor="#FFFFFF"> <th> </th> <th>1</th> <th>2</th> <th>3</th> <th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th> </tr>
					<tr bgcolor="#888888"> <td bgcolor="#FFFFFF">A</td> <td></td> <td bgcolor="#FF00000"></td> <td bgcolor="#FF00000"></td> <td></td><td></td> <td></td> <td bgcolor="#FF00000"></td> <td></td><td <td bgcolor="#FF00000"></td><td></td>  </tr>
					<tr bgcolor="#888888"> <td bgcolor="#FFFFFF">B</td> <td></td> <td  bgcolor="#FF00000"></td> <td></td> <td></td><td  bgcolor="#FF00000"></td> <td></td> <td></td> <td bgcolor="#FF00000"></td><td></td> <td bgcolor="#FF00000"></td> </tr>
					<tr> <td colspan="11" > -------------------------------------</td></tr>
					<tr bgcolor="#888888"> <td bgcolor="#FFFFFF">C</td> <td bgcolor="#FF00000"></td> <td></td> <td></td> <td></td><td></td> <td bgcolor="#FF00000"></td> <td></td> <td bgcolor="#FF00000"></td><td></td><td></td> </tr>
					<tr bgcolor="#888888"> <td bgcolor="#FFFFFF">D</td> <td></td> <td bgcolor="#FF00000"></td> <td></td> <td bgcolor="#FF00000"></td><td></td><td></td> <td></td> <td bgcolor="#FF00000"></td> <td></td><td></td> </tr>
					<tr bgcolor="#FFFFFF"> <th> </th> <th>1</th> <th>2</th> <th>3</th> <th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th> </tr>
				</table>
				<div>
					<form>
						<p>Price:
						<select>
							<option value="$0.5">$0.5</option>
							<option value="$1.0">$1.0</option>
							<option value="$2.0">$2.0</option>
							<option value="$4.0">$4.0</option>
						</select> </p>
					</form>
					<a href="spotsavailable.php"><button>Check Spot</button></a>

				</div>
			</div>
		</div>
	</body>
</html>
 <?php
include "footer.php";
?> 