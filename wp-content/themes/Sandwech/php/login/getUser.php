<?php

function getUser($id)
{
    $url = 'http://localhost/food-api/API/user/getUser.php?id=' . $id;
    return json_decode(file_get_contents($url));
}
