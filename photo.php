<?php

    $insta_user_id = "17841401034273199";
    $access_token = "IGQVJWOE1tMXVWN1BHRWN1RDhhcFlzckdGNUZAmTzBJMkZAvOGxDbTZACMmgtUng0eENxR2NPN2F4MzVITF9tRmlULTYxMWw4ZA1k1Y1ZAfemczLWVHckhxXy12Ujc1eWljRU9BRmEzOTdUUEpQQ0Rua1NYOQZDZD";

    $post_id = $_POST['post_id'];
    $fields = "id,media_type,media_url,username,timestamp,permalink";

    $link = "https://graph.instagram.com/{$post_id}?access_token={$access_token}&fields={$fields}";
    $data = file_get_contents($link);

    echo $data;

?>