<?php
function getInformationsOfUser($id)
{
    $data = file_get_contents("http://localhost/food-api/API/user/getUser.php?id=" . $id);
    return $data;
}
getInformationsOfUser(1);
