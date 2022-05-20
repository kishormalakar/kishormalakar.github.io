<?php

    $insta_user_id = "17841401034273199";
    $access_token = "IGQVJWOE1tMXVWN1BHRWN1RDhhcFlzckdGNUZAmTzBJMkZAvOGxDbTZACMmgtUng0eENxR2NPN2F4MzVITF9tRmlULTYxMWw4ZA1k1Y1ZAfemczLWVHckhxXy12Ujc1eWljRU9BRmEzOTdUUEpQQ0Rua1NYOQZDZD";
    $fields = "account_type,username,media_count,media";

    $link = "https://graph.instagram.com/{$insta_user_id}?access_token={$access_token}&fields={$fields}";

    $data = file_get_contents($link);
    $json = json_decode($data, true);
    $posts = $json['media']['data'];

    // print_r($posts);
    echo json_encode($posts);

?>