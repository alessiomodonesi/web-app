<?php
require __DIR__ . '/getUser.php';
function verify()
{
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $data = file_get_contents("http://localhost/food-api/API/user/getUser.php?id=" . $id);
        $user = $data;
        echo $user;
        return $user;
    }
    return false;
}
verify();
