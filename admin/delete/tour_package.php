<img src="../../upload/tour-package/thumb/1847492566_198848502666_1541507217_n.jpg" alt=""/>
<?php

include '../../db.php';
include '../../function.php';

$db = new DB();

$id = $_GET['id'];

$pack = getOnePackage($id);

$packImg = getAllPackagesPhotos($id);

foreach ($packImg as $gallery) {

    unlink('../../upload/tour-package/gallery/' . $gallery['image_name']);
    unlink('../../upload/tour-package/gallery/thumb/' . $gallery['image_name']);
    unlink('../../upload/tour-package/date/gallery/' . $gallery['image_name']);
    unlink('../../upload/tour-package/date/gallery/thumb/' . $gallery['image_name']);
    
        
    $db->readQuery("DELETE FROM `tour_date` WHERE `tour` =  '" . $gallery['id'] . "'");
    $db->readQuery("DELETE FROM `tour_date_photo` WHERE `tour_date` =  '" . $gallery['id'] . "'");
}

$file1 = '../../upload/tour-package/' . $pack['image_name'];
$file2 = '../../upload/tour-package/thumb1/' . $pack['image_name'];
$file3 = '../../upload/tour-package/thumb/' . $pack['image_name'];
unlink($file1);
unlink($file2);
unlink($file3);

$sql = "DELETE FROM `tour_package` WHERE `id` =  '$id'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
