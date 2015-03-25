<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>

<link href="test1.css" rel="stylesheet" type="text/css">
</head>

<style>


caption{

	color:hsla(0,0%,100%,1.00);
	font-size:15px;	
	text-align:right;
	font-family:orbitron;
	
}


table, th, td {
	
    border: 1px solid hsla(0,0%,100%,1.00);
	background-color: hsla(246,96%,63%,1.00);
	color:hsla(0,0%,100%,1.00);
	border-collapse: collapse;
	height:50px;;
	margin-top:120px;
	margin-left:70px;
	font-family: Rajdhani;

	}
	
		

</style>


<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<div id="back">

<div id="buttons">



  <a href="about.php" class="button about">ABOUTUS</a>
  <a href="project.php" class="button project">PROJECT</a>
  <a href="gallery.html" class="button gallery">GALLERY</a>
  <a href="contact.html" class="button contact">CONTACT</a>
  
</div>

<div id="channelus">

	<?php
$sql = "SELECT * FROM project";

$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
    		echo "<table><caption>Projects Info</caption><tr><th>Name</th><th>Project Kind</th><th>Date</th><th>Hours Works</th><th>Location</th><th>ID</th></tr>";
			
	    	while($row = $result->fetch_assoc()) {
				
        		echo "<tr><td>".$row["name"]."</td><td>".$row["kind"]."</td><td>".$row["date"]."</td><td>".$row["hours"]."</td><td>".$row["location"]."</td><td>".$row["id"]."</td></tr>";
    		}
			
    		echo "</table> </div>";
	} 
		
	else {
		
    		echo "You have no songs";
	}
	
		$conn->close();	
?>


<div id="chp" style="position:absolute; margin-top:140px; margin-left:500px;">

CH p

</div>

</div>
  
<div id="turn" style="position:absolute"> 

<div align="right" class="turnon" onClick="location.href='channel.html';" style="cursor:pointer";>TURN ON</div>

<div class="turnoff" onClick="location.href='close.html';" style="cursor:pointer";>TURN OFF</div>







</div>

</body>

</html>