<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/work/OCRBot/FormBotToserver.php",
));

$response = curl_exec($curl);
echo $response;
