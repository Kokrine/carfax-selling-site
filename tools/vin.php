<?php

// Get vin from submit button
$vin = $_POST['vin'];

$url = "https://api.lot.report/check_reports/?vin=" . $vin;

$curl = curl_init($url);

$headers = array(
   "Authorization: Api-Key qoh0iIqr.x7OiqEpxVkdnFzRzaoqfd3FIBi4RTqjR",
   "Content-Type: application/json",
   "Accept: application/json",
   
);

$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty array :3
$line = json_decode($result, true);

echo "<pre><center><h4>Vehicle: " . $line['vehicle']['year'];
echo " " . $line['vehicle']['make'];
echo " " . $line['vehicle']['model'];
echo "</pre><pre><center>Carfax Records: " . $line['carfax_records'];
echo "</pre><pre><center>AutoCheck Records: " . $line['autocheck_records'];

print "</pre><pre><center>Vin: ";
//print_r($line);
print $_POST['vin'];
print "</pre>";

if (curl_error($ch)) {
    echo 'API Error: ' . curl_error($ch);
}

?>

