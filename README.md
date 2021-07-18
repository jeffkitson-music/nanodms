# nanodms
A simple dead man's switch in PHP.

## Set Date
Use setdatedms.php to write the date to a file. 
Uses HTTP POST and a key of your choosing to avoid random or malicious date changes.

## Check Date
Use checkdms.php to check if the switch has been fipped.
If today is after the release date, the secret will be revealed.
