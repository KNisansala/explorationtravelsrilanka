<?php

include '../../db.php';

$image = $_GET['img'];

$file1 = '../../images/gallery/' . $image;
$file2 = '../../images/gallery/thumb/' . $image;

unlink($file1);
unlink($file2);

$sql = "DELETE FROM `gallery` WHERE `image_name` =  '$image'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

