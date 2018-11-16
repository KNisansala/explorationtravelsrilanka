<?php

include '../../db.php';
include '../../function.php';

$db = new DB();
$tourDatephoto = '';
if (isset($_GET['id'])) {
    $tourDatephoto = $_GET['id'];
}
//$id = $_GET['id'];
//$pack = getOneTourdatebyid($tourDate);
$packImg = getAllTourDatesPhoto($tourDatephoto);
//dd($packImg);
foreach ($packImg as $gallery) {
    unlink('../../upload/tour-package/date/gallery/' . $gallery['image_name']);
    unlink('../../upload/tour-package/date/gallery/thumb/' . $gallery['image_name']);
}

$file1 = '../../upload/tour-package/date/gallery/thumb/' . $pack['image_name'];

unlink($file1);

$sql = "DELETE FROM `tour_date_photo` WHERE `id` =  '$tourDatephoto'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
