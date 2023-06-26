<?php
/* $url = "http://localhost/apiCampers/controllers/camper.php?op=GetAll";   */
/* $url = "http://localhost/apiCampersPoo/controllers/camper.php?op=GetAll"; */
$url = "http://localhost/apiCampersPoo/controllers/camper.php?op=GetAll"; 
/* $url = "../db.json"; */
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl));
curl_close($curl);
print_r($output);

?>