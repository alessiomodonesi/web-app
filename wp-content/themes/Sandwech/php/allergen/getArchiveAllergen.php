<?php
function getArchiveAllergen(){
    $url = 'http://localhost/food-api/API/allergen/getArchiveAllergen.php';
    if(file_get_contents($url) == false){
        echo "Failed to get archive allergen";
    }
    $data = json_decode(file_get_contents($url));
    $allergen = array();
    foreach ($data as $key) {
        array_push($allergen,array($key->id, $key->name));
    }
    return $allergen;
}
//getArchiveAllergen();
?>