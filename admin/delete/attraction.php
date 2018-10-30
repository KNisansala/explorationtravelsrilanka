<?php
include '../../db.php';
include '../../function.php';

$db = new DB();

$id = $_GET['id']; 

$attraction = getOneAttraction($id);

$attractionPhotos = getAllAttractionPhotos($id);

foreach ($attractionPhotos as $gallery) {

    unlink('../../images/attractions/gallery/' . $gallery['image_name']);
    unlink('../../images/attractions/gallery/thumb/' . $gallery['image_name']);
    $db->readQuery("DELETE FROM `attractions_photos` WHERE `id` =  '" . $gallery['id'] . "'");
}

$file1 = '../../images/attractions/' . $attraction['image_name']; 
$file2 = '../../images/attractions/thumb/' . $attraction['image_name']; 
unlink($file1); 
unlink($file2); 

$sql = "DELETE FROM `attractions` WHERE `id` =  '$id'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
