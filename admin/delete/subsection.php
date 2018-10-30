<?php

include '../../db.php';

$image = $_GET['img'];

$file1 = '../../images/subsections/' . $image;
$file2 = '../../images/subsections/thumb/' . $image;

unlink($file1);
unlink($file2);

$sql = "DELETE FROM `subsections` WHERE `image_name` =  '$image'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

