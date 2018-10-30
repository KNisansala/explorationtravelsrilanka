<?php
include '../../db.php';
include '../../function.php';

$db = new DB();

$id = $_GET['id']; 

$offer = getOneoffers($id);



foreach ($offersImg as $gallery) {

    unlink('../../images/offers/gallery/' . $gallery['image_name']);
    unlink('../../images/offers/gallery/thumb/' . $gallery['image_name']);
    $db->readQuery("DELETE FROM `offers` WHERE `id` =  '" . $gallery['id'] . "'");
}

$file1 = '../../images/offers/' . $offer['image_name']; 

unlink($file1); 

$sql = "DELETE FROM `offers` WHERE `id` =  '$id'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
