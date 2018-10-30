<?php

include '../../db.php';

$image = $_GET['img'];

$file1 = '../../images/attractions/gallery/' . $image;
$file2 = '../../images/attractions/gallery/thumb/' . $image;
unlink($file1);
unlink($file2);

$sql = "DELETE FROM `attractions_photos` WHERE `image_name` =  '$image'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
