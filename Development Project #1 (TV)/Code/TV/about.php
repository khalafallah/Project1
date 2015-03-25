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
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	text-align:right;
	font-family:orbitron;
	
}

table, th, td {
    border: 1px solid hsla(0,0%,100%,1.00);
	background-color: hsla(246,96%,63%,1.00);
	color:hsla(0,0%,100%,1.00);
	margin-left:120px;
	margin-top:140px;
	width: 65%;
	height:30px;
	border-collapse: collapse;
	font-family:orbitron;

	}

td{
	text-align:left;
	text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    animation: float 5s infinite;
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

  <a href="about.php"s class="button about">ABOUTUS</a>
  <a href="project.php" class="button project">PROJECT</a>
  <a href="gallery.html" class="button gallery">GALLERY</a>
  <a href="contact.html" class="button contact">CONTACT</a>
  
</div>

<div id="channelus">

<?php
$sql = "SELECT * FROM cv";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
        echo "
		
		<table><caption>GROUP IFO</caption>
		<tr><td>NAME:</td><th>" . $row["name"]."</th></tr>
		<tr><td>ADDRESS:</td><th>" . $row["address"]."</th></tr>
		<tr><td>E-MAIL:</td><th>" . $row["email"]."</th></tr>
		<tr><td>PHONE:</td><th>" . $row["phone"]."</th></tr>
		<tr><td>MAJOR:</td><th>" . $row["major"]."</th></tr>
		<tr><td>DATE:</td><th>" . $row["dof"]."</th></tr>
		<tr><td>ID:</td><th>" . $row["id"]."</th></tr></p>
		</table>";
    }
	
} 

else {
    echo "0 results";
}
?>


<div id="cha">

CH A

</div>

</div>
  
<div id="turn"> 

<div align="right" class="turnon" onClick="location.href='channel.html';" style="cursor:pointer";>TURN ON</div>

<div class="turnoff" onClick="location.href='close.html';" style="cursor:pointer";>TURN OFF</div>







</div>

</body>

</html>