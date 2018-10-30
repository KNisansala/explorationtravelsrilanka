<?php

include '../../db.php';

$image = $_GET['img'];
 
$file1 = '../../images/team/' . $image; 
unlink($file1);

$sql = "DELETE FROM `team` WHERE `image_name` =  '$image'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
