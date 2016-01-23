<?php
// TODO: Hey Erc, wanna implement this?
$username = $_GET["user"];
$tags = $_GET["tags"];
$con = mysqli_connect("localhost","root","root","LetsTalk","8889");
$sql = "SELECT * FROM `LetsTalk`.`Person` WHERE `Email` = '". $username ."';";
// Check connection
if (!$con) {
  echo "Database not available";
}
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
 ?>
