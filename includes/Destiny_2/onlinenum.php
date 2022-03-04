<?php
$configdata = file_get_contents("config/config.json");
$configarray = json_decode($configdata, true);

$apiKey = $configarray['BungieAPIToken'];

 $ch1 = curl_init();
 curl_setopt($ch1, CURLOPT_URL, 'https://www.bungie.net/Platform/GroupV2/503302/Members/?memberType=None');
 curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch1, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json1 = json_decode(curl_exec($ch1));

 $ch2 = curl_init();
 curl_setopt($ch2, CURLOPT_URL, 'https://www.bungie.net/Platform/GroupV2/4686725/Members/?memberType=None');
 curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch2, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json2 = json_decode(curl_exec($ch2));

 $ch3 = curl_init();
 curl_setopt($ch3, CURLOPT_URL, 'https://www.bungie.net/Platform/GroupV2/4729681/Members/?memberType=None');
 curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch3, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json3 = json_decode(curl_exec($ch3));

 $ch4 = curl_init();
 curl_setopt($ch4, CURLOPT_URL, 'https://www.bungie.net/Platform/GroupV2/4779475/Members/?memberType=None');
 curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch4, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json4 = json_decode(curl_exec($ch4));

 $i = 0;
 $online = 0;

 foreach($json1->Response->results as $user1){
     if($user1->isOnline ==1){
        $i++;
        $online++;
     } else {
        $i++;
     }


 }
 foreach($json2->Response->results as $user2){
    if($user2->isOnline ==1){
      $i++;
      $online++;
   } else {
      $i++;
   }


}
foreach($json3->Response->results as $user3){
    if($user3->isOnline ==1){
      $i++;
      $online++;
   } else {
      $i++;
   }


}
foreach($json4->Response->results as $user4){
    if($user4->isOnline ==1){
      $i++;
      $online++;
   } else {
      $i++;
   }

}
?>