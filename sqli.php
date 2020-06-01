<?php
if(isset($_POST["b"])){
$servername = "sql103.unaux.com";
$username = "unaux_25915225";
$password = "xc0rai";
$dbname = "unaux_25915225_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){die("Connection failed: " . $conn->connect_error);}else{
$a = $_POST["a"];
$sql = "INSERT INTO c (a) VALUES ('$a')";
if($conn->query($sql) === TRUE){} else {echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
}
}
?>
<html>
<body>
<center><br><p>Lab</p><br></center>
<center><br><p>Value</p><br></center>
<form method="post" autocomplete="off">
<center><br><p><input name="a"></p><br></center>
<center><br><p><input type="submit" name="b"></p><br></center>
</form>
</body>
</html>
