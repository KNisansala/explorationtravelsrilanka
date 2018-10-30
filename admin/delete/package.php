<?php
include '../../db.php';
include '../../function.php';

$db = new DB();

$id = $_GET['id']; 

$pack = getOnePackage($id);

$packImg = getAllPackagesPhotos($id);

foreach ($packImg as $gallery) {

    unlink('../../images/packages/gallery/' . $gallery['image_name']);
    unlink('../../images/packages/gallery/thumb/' . $gallery['image_name']);
    $db->readQuery("DELETE FROM `packages_photos` WHERE `id` =  '" . $gallery['id'] . "'");
}

$file1 = '../../images/packages/' . $pack['image_name']; 

unlink($file1); 

$sql = "DELETE FROM `packages` WHERE `id` =  '$id'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
