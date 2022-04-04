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

 $ch5 = curl_init();
 curl_setopt($ch5, CURLOPT_URL, 'https://www.bungie.net/Platform/GroupV2/4848096/Members/?memberType=None');
 curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch5, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json5 = json_decode(curl_exec($ch5));

 $i = 0;
 $online = 0;

 echo "<div id='memberlist'>";
 echo   "<table class='table'>";
 echo       "<thead>";
 echo          "<tr>";
// echo             "<th>Clan</th>";
 echo             "<th scope='col'>Platform</th>";
 echo             "<th scope='col'>Username</th>";
 echo          "</tr>";
 echo       "</thead>";
 echo       "<tbody>";
 echo          "<tr>";

 foreach($json1->Response->results as $user1){
     if($user1->isOnline ==1){
        //echo "<td>KappaArmy</td>";
        echo "<td><img src=https://bungie.net".$user1->destinyUserInfo->iconPath." width='32' height='32'></img></td>";
        echo "<td>".$user1->destinyUserInfo->bungieGlobalDisplayName."#".$user1->destinyUserInfo->bungieGlobalDisplayNameCode."</td>";
        echo "</tr>";
        echo "<tr>";
        $i++;
     }


 }
 foreach($json2->Response->results as $user2){
    if($user2->isOnline ==1){
       //echo "<td>KappaArmy II</td>";
       echo "<td><img src=https://bungie.net".$user2->destinyUserInfo->iconPath." width='32' height='32'></img></td>";
       echo "<td>".$user2->destinyUserInfo->bungieGlobalDisplayName."#".$user2->destinyUserInfo->bungieGlobalDisplayNameCode."</td>";
       echo "</tr>";
       echo "<tr>";
       $i++;
    }


}
foreach($json3->Response->results as $user3){
    if($user3->isOnline ==1){
       //echo "<td>KappaArmy III</td>";
       echo "<td><img src=https://bungie.net".$user3->destinyUserInfo->iconPath." width='32' height='32'></img></td>";
       echo "<td>".$user3->destinyUserInfo->bungieGlobalDisplayName."#".$user3->destinyUserInfo->bungieGlobalDisplayNameCode."</td>";
       echo "</tr>";
       echo "<tr>";
       $i++;
    }


}
foreach($json4->Response->results as $user4){
    if($user4->isOnline ==1){
       //echo "<td>KappaArmy IV</td>";
       echo "<td><img src=https://bungie.net".$user4->destinyUserInfo->iconPath." width='32' height='32'></img></td>";
       echo "<td>".$user4->destinyUserInfo->bungieGlobalDisplayName."#".$user4->destinyUserInfo->bungieGlobalDisplayNameCode."</td>";
       echo "</tr>";
       $i++;
    }
}
foreach($json5->Response->results as $user5){
   if($user5->isOnline ==1){
      //echo "<td>KappaArmy IV</td>";
      echo "<td><img src=https://bungie.net".$user5->destinyUserInfo->iconPath." width='32' height='32'></img></td>";
      echo "<td>".$user5->destinyUserInfo->bungieGlobalDisplayName."#".$user5->destinyUserInfo->bungieGlobalDisplayNameCode."</td>";
      echo "</tr>";
      $i++;
   }

}
 echo "</tbody>";
 echo "</table>";
 //echo "Insgesamt sind ". $i ." online!";



// $json = file_get_contents('test.json');
 //$json_data = json_decode($json,true);

//foreach($json_data as $users){
//    echo $users->Response;
//    echo ",  ";
?>
<script src='../js/table-sort.js'></script>