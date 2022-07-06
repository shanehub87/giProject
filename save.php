<?php



$mysqli = new mysqli("localhost","root","","jordans");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$email = $_POST['email'];
echo "hey man".$email;
$sql = "INSERT INTO emailentries (email)
VALUES ('".$email."')";

if ($mysqli->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("Location: thankyou.php?message=Good luck on your chance to win a fresh pair!");
} else {
 // echo "Error: " . $sql . "<br>" . $mysqli->error;

  header("Location: index.php?message=Error");
}

$mysqli->close();

?>