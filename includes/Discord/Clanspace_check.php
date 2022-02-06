<?php
//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://canary.discord.com/api/webhooks/939700074349461555/6bF_mHv2t1gwjl76RAWjXIrCZdqOZTbmDJ3dwnf-6B3fj80k1Zyh9ZPRoNApX9Cc2G6x/";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    //"content" => "Wait a second",
    
    // Username
    "username" => "KappaArmy 🌿 | Clan-Einladungen",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "Unseere Destiny 2 KappaArmy Clans",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => '`KappaArmy I` **Core Mitglieder / Manuelle einladung von uns :>
            ►►** Der Erst Clan ist für aktive Member der Kappaarmy reserviert. Falls du aktiv in der Community beiträgst, wirst du sicherlich auch irgendwann in diesen Clan eingeladen!

            `KappaArmy II` **<INSERT CODE HERE> / 100**
            **►►** Einladungs-link: https://www.bungie.net/en/ClanV2/Index?groupId=4686725

            `KappaArmy III` **<INSERT CODE HERE> / 100**
            **►►** Einladungs-link: https://www.bungie.net/en/ClanV2/index?groupId=4729681

            `KappaArmy IV` **<INSERT CODE HERE> / 100**
            **►►** Einladungs-link: https://www.bungie.net/en/ClanV2/index?groupId=4779475
            ',

            // URL of title link
            //"url" => "",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "8cc59d" ),

            // Footer
            "footer" => [
                "text" => "Last checked:"
            ],

            // Image to send
           // "image" => [
           //     "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=600"
           // ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => "",
                "url" => ""
            ],

            // Additional Fields array
            //"fields" => [
                // Field 1
            //    [
            //        "name" => "Field #1 Name",
            //        "value" => "Field #1 Value",
            //        "inline" => false
            //    ],
                // Field 2
            //    [
            //        "name" => "Field #2 Name",
            //        "value" => "Field #2 Value",
            //        "inline" => true
            //    ]
                // Etc..
            //]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
//echo $response;
curl_close( $ch );

?>