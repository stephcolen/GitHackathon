<?php
	// Open teh participants file
	$myfile = fopen("participants.txt", "r") or die("Unable to open file!");
	
	echo "Congratulations to:\r\n";

	// Parse line by line and print the participant
	while(!feof($myfile)) {
	  echo fgets($myfile);
	}

	echo "\r\nYou have learned to git!\r\n";
	// Close that file
	fclose($myfile);
?>
