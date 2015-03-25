<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
</head>

<body>

<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 $headers= "From: $email";
 $to= 'khalafallah@outlook.com';
 $subject="New Message";
 $sent= mail($to, $subject, $message);
?>

</body>
</html>