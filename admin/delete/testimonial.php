<?php

include '../../db.php';
include '../../function.php';

$id = $_GET['id'];
$testimonial = getOneTestimonial($id);

$file1 = '../../images/testimonial/' . $testimonial['image_name']; 

unlink($file1); 

$sql = "DELETE FROM `testimonial` WHERE `id` =  '$id'";

$db = new DB();

if ($db->readQuery($sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

