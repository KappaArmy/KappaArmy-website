<?php
 $apiKey = '9ab2bfd13ee147e6b97256efd9f8e2d8';

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://www.bungie.net/Platform/GroupV2/4779475/Members/?memberType=None');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json = json_decode(curl_exec($ch));

 foreach($json->Response->results as $page){
     print_r($page);
 }

 //var_dump($json);

