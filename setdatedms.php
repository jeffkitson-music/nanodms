<?php
  // Takes raw data from the request
  $json = file_get_contents('php://input');

  // Converts it into a PHP object
  $data = json_decode($json);
  if($data->{'mykey'} =="mysecretkey"){
    $checkdate = $data->{'check_date'};
    $myfile = fopen("dmsdate.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $checkdate);
    fclose($myfile);
    echo '{"status":"success"}';
  } else{ 
    echo '{"status":"fail"}';
  }
?>
