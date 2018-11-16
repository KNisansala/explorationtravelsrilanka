<?php

include '../../db.php';
include '../../function.php';

$db = new DB();
$tourDate = '';
if (isset($_GET['id'])) {
    $tourDate = $_GET['id'];
}

//$id = $_GET['id'];


//$pack = getOneTourdatebyid($tourDate);

$packImg = getAllTourDates($tourDate);
//dd($packImg);
foreach ($packImg as $gallery) {

 
    unlink('../../upload/tour-package/gallery/' . $gallery['image_name']);
    unlink('../../upload/tour-package/gallery/thumb/' . $gallery['image_name']);
    

    $db->readQuery("DELETE FROM `tour_date_photo` WHERE `tour_date` =  '" . $gallery['id'] . "'");
}

//$file1 = '../upload/tour-package/' . $pack['image_name'];

unlink($file1);

$sql = "DELETE FROM `tour_date` WHERE `id` =  '$tourDate'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
