# nanodms
A simple dead man's switch in PHP.

## Set Date
Send an HTTP POST request to the file with two parameters:
  1. Your security token
  2. The next required check-in date

## Check Date
Load the script in your browser or with a standard HTTP GET request.
If today is after the release date, the secret will be revealed.
