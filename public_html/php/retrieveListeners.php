<?php
// TODO: send me the traits bitch
$username = $_GET["user"];
$topics = $_GET["tags"];
$traits = $_GET["traits"];
$con = mysqli_connect("localhost","root","root","LetsTalk","8889");
$sql = "SELECT * FROM `LetsTalk`.`ActiveListener`;";
// Check connection
if (!$con) {
  echo "Database not available";
}
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$traitsWeighting = 0.35;
$starsWeighting = 0.4;
$topicsWeighting = 0.25;

foreach ($result as $listener){
	$matchingTopics = 0;
	//TODO grab $theirTopics from $listener

	foreach($topics as $topic){ 
		if(in_array($topic, $theirTopics)){
			$matchingTopics++;
		}
	}
	
	
//TODO parse for topics that are in both sets.

// Formula: $traitsWeighting*(0.25*abs() + 0.25*abs() + 0.25*abs() + 0.25*abs()) + $starsWeighting*0.2*numStars + $topicsWeighting*($matchingTopics/sizeof($topics))
//`ProblemSolver` INT NOT NULL,
//	`ListeningExperience` INT NOT NULL,
//	`PersonalExperience` INT NOT NULL,
//	`Bluntness` INT NOT NULL,
}

//TODO send Chris back this nonsense.
// Message: To access tags, $tags[0]..$tags[sizeof($tags) + 1?];
// echo like this... <div class"listener col-md-5">
//   <img src="..." alt="..." />
//   <p> $Username </p>
//   <p> $Small Ach </p>
//   <p> $Stars </p>
// </div>
?>
