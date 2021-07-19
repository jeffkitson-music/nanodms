<?php 
/*
	nanodms.php
	A Nano-Sized Dead Man's Switch
*/

//Check for HTTP Post Data and covert it to JSON
$json = file_get_contents('php://input');
$obj = json_decode($json);

// Check if the security token is correct in the POST data.
if ($obj->{'Token'} == "MySecurityToken") {
	// If the token is correct, write the next required check-in date to a text file.
	$checkdate = $obj->{'Next Check-In'};
	$datefile = fopen("mydate.txt", "w") or die("Unable to open file!");
	fwrite($datefile, $checkdate);
	fclose($datefile);
	// Finally, if everything executed correctly, return success.
	echo '{"status":"success"}';
	} 
else {
	// If there is no HTTP POST data or the token is incorrect, do the date comparison.
	// Get the date from the file
	$datefile = fopen("mydate.txt", "r") or die("Unable to open file!");
	$datefromfile = fgets($datefile);
	fclose($datefile);
	// Declare date variables
	$today = date("Y/m/d");
	$releasedate = date($datefromfile);
	// Date logic: If today is greater than the required check-in/release date, include the secret data in the output.
	if ($today>$releasedate) {
	echo '{"status":"responsive"}';
	}else {
		echo '{"status":"unresponsive","secret_key":"mysupersecretinfo}';
		}
		
}
?> 

