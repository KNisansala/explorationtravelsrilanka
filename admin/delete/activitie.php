<?php
include '../../db.php';
include '../../function.php';

$db = new DB();

$id = $_GET['id']; 

$activitie = getOneActivitie($id);

$activitiePhotos = getAllActivitiePhotos($id);

foreach ($activitiePhotos as $gallery) {

    unlink('../../images/activities/gallery/' . $gallery['image_name']);
    unlink('../../images/activities/gallery/thumb/' . $gallery['image_name']);
    $db->readQuery("DELETE FROM `activities_photos` WHERE `id` =  '" . $gallery['id'] . "'");
}

$file1 = '../../images/activities/' . $activitie['image_name']; 

unlink($file1); 

$sql = "DELETE FROM `activities` WHERE `id` =  '$id'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
