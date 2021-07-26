# :skull_and_crossbones: nanodms
A simple dead man's switch in PHP.

## :open_file_folder: Installation/Set-Up
Edit the file to include your security token and secret payload. Upload to your server.

## :calendar: Set Date
Send an HTTP POST request to the file with two parameters:
  1. Your security token
  2. The next required check-in date

## :closed_lock_with_key: Check Date
Load the script in your browser or with a standard HTTP GET request.

If today is after the release date, the secret payload will be revealed. All responses are in JSON format so as to be easily integrated into other applications.

## :eyes: Disclaimer
This is a hobby project and should not be used with any serious applications that include sensitive data (whistleblowers, etc.).
