<?php
  // Get the date from the file
  $myfile = fopen("dmsdate.txt", "r") or die("Unable to open file!");
  $datefromfile = fgets($myfile);
  fclose($myfile);
  // Logic
  $today = date("Y/m/d");
  $releasedate = date($datefromfile);
  // If today is after (greater than) the release date, reveal the secret. 
  if ($today>$releasedate) {
    echo '{"status":"responsive"}';
  }else {
    echo '{"status":"unresponsive","secret":"supersecretinfo"}';
  }
?>
