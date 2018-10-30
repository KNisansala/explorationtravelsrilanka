<?php

include '../../db.php';

$image = $_GET['img'];

$file1 = '../../images/slider/' . $image;

unlink($file1);

$sql = "DELETE FROM `slider` WHERE `image_name` =  '$image'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
