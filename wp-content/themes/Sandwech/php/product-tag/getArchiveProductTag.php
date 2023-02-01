<?php
function getArchiveProductTag(){
    $url = 'http://localhost/food-api/API/tag/product-tag/getArchiveProductTag.php';
    if(@file_get_contents($url) == false){
        return false;
    }

    $data = (file_get_contents($url));
    echo json_encode($data);
    /*foreach($data[1] as $key){
        echo json_encode($key->product . ' ' . $key->tag . '<br />');
    }*/
}
function getArchiveProductTagByProductID($productid){
    $url = 'http://localhost/food-api/API/tag/product-tag/getArchiveProductTag.php?product_id='.$productid;

}
getArchiveProductTag();
?>