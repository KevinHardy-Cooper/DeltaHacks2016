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
// Message: To access tags, $tags[0]..$tags[sizeof($tags) + 1?];
// echo like this... <div class"listener col-md-5">
//   <img src="..." alt="..." />
//   <p> $Username </p>
//   <p> $Small Ach </p>
//   <p> $Stars </p>
// </div>
 ?>
