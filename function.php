<?php

function filename() {

    $today = time();
    $startDate = date('YmdHi', strtotime('3012-03-14 09:06:00'));
    $range = $today - $startDate;
    $rand = rand(0, $range);
    $imgname = $rand . "_" . ($startDate + $rand) . '_' . $today . "_n";
    return $imgname;
}

function seoUrl($text) {
    //Lower case everything
    $string = strtolower($text);
    //Make alphanumeric (removes all other characters)
    $string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string3 = preg_replace("/[\s-]+/", " ", $string2);
    //Convert whitespaces and underscore to dash
    $string4 = preg_replace("/[\s_]/", "-", $string3);
    return $string4;
}

// image slider //

function addNewSlide($post, $file) {

    $addImgName = filename();

    $dir_dest = '../images/slider/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 1600;
        $handle->image_y = 700;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $query = "INSERT INTO `slider` (title, url, description, image_name)
VALUES ('" . mysql_real_escape_string($_POST['title']) . "', '" . mysql_real_escape_string($_POST['url']) . "', '" . mysql_real_escape_string($_POST['description']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllSlides() {

    $query = "SELECT * FROM `slider` ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneSlide($id) {

    $query = "SELECT * FROM `slider` WHERE `id` = '$id' LIMIT 1";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneSlide($post, $file) {

    $id = $_POST['id'];
    $imageold = $_POST['oldImg'];

    $dir_dest = '../images/slider/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 1600;
        $handle->image_y = 700;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `slider` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . "`description` = '" . mysql_real_escape_string($_POST['description']) . "',"
            . "`url` = '" . mysql_real_escape_string($_POST['url']) . "'"
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

//welcom text //

function getWelcomeNote() {

    $query = "SELECT * FROM `welcome-note` WHERE `id` = '1' LIMIT 1";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateWelcomeNote($post) {

    $db = new DB();

    $sql = "UPDATE `welcome-note` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . "`url` = '" . mysql_real_escape_string($_POST['url']) . "',"
            . "`description` = '" . mysql_real_escape_string($_POST['description']) . "'"
            . "WHERE `id` = 1 ";


    $result = $db->readQuery($sql);
    return $result;
}

//gallery //

function addNewImage($post, $file) {

    $addImgName = filename();

    $dir_dest = '../images/gallery/';
    $dir_dest_thumb = '../images/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 300;
        $handle->image_y = 175;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
        }
    }

    $db = new DB();

    $query = "INSERT INTO `gallery` (caption, image_name)
VALUES ('" . mysql_real_escape_string($_POST['caption']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllImages() {

    $query = "SELECT * FROM `gallery` ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneImage($id) {

    $query = "SELECT * FROM `gallery` WHERE `id` = '$id' LIMIT 1";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneImage($post, $file) {

    $id = $_POST['id'];
    $imageold = $_POST['oldImg'];
    $dir_dest = '../images/gallery/';
    $dir_dest_thumb = '../images/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 900;
        $handle->image_y = 500;


        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 300;
        $handle->image_y = 175;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `gallery` SET "
            . "`caption` = '" . mysql_real_escape_string($_POST['caption']) . "'"
            . "WHERE `id` = '$id' ";



    $result = $db->readQuery($sql);

    return $result;
}

//about us //

function getAboutUspageContant() {

    $query = "SELECT * FROM `about_us` WHERE `id` = '1' LIMIT 1";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateAboutUspageContant($post, $file) {

    $dir_dest = '../images/about/';

    $handle = new Upload($file['image']);

    $imgName = null;
    $db = new DB();
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = 'aboutus.jpg';
        $handle->image_x = 500;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }


    $sql = "UPDATE `about_us` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . " `description` = '" . mysql_real_escape_string($_POST['description']) . "',"
            . "`vision` = '" . mysql_real_escape_string($_POST['vision']) . "',"
            . "`mission` = '" . mysql_real_escape_string($_POST['mission']) . "' "
            . "WHERE `id` = 1 ";


    $result = $db->readQuery($sql);
    return $result;
}

//package //

function addNewPackage($post, $file) {
//
//    $addImgName = filename();
//
//    $dir_dest = '../images/packages/';
//
//    $handle = new Upload($file['image']);
//
//    $imgName = null;
//
//    if ($handle->uploaded) {
//        $handle->image_resize = true;
//        $handle->file_new_name_ext = 'jpg';
//        $handle->image_ratio_crop = 'C';
//        $handle->file_new_name_body = $addImgName;
//        $handle->image_x = 480;
//        $handle->image_y = 300;
//
//        $handle->Process($dir_dest);
//
//        if ($handle->processed) {
//            $info = getimagesize($handle->file_dst_pathname);
//            $imgName = $handle->file_dst_name;
//        }
//    }
//
//    $db = new DB();
//
//    $query = "INSERT INTO `packages` (title, duration, short_description, description, image_name)
//VALUES ('" . mysql_real_escape_string($_POST['title']) . "','" . mysql_real_escape_string($_POST['duration']) . "', '" . mysql_real_escape_string($_POST['short_description']) . "', '" . mysql_real_escape_string($_POST['description']) . "', '" . mysql_real_escape_string($imgName) . "')";
//
//    $result = $db->readQuery($query);
//
//    return $result;
}

function getAllPackages() {

    $query = "SELECT * FROM `packages` ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOnePackage($id) {

    $query = "SELECT * FROM `packages` WHERE `id` = '$id' LIMIT 1";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOnePackage($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];

    $dir_dest = '../images/packages/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 480;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `packages` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . "`duration` = '" . mysql_real_escape_string($_POST['duration']) . "',"
            . "`short_description` = '" . mysql_real_escape_string($_POST['short_description']) . "',"
            . " `description` = '" . mysql_real_escape_string($_POST['description']) . "' "
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

function addNewPackagePhoto($post, $file) {

    $addImgName = filename();
    $id = $_POST['id'];

    $dir_dest = '../images/packages/gallery/';
    $dir_dest_thumb = '../images/packages/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
        }
    }

    $db = new DB();

    $query = "INSERT INTO `packages_photos` (package_id, caption, image_name)
VALUES ('" . mysql_real_escape_string($id) . "', '" . mysql_real_escape_string($_POST['caption']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllPackagesPhotos($id) {

    $query = "SELECT * FROM `packages_photos` WHERE `package_id` = '$id' ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOnePackagePhoto($id) {

    $sql = "SELECT * FROM `packages_photos` WHERE `id` = '$id'";

    $db = new DB();
    $result = $db->readQuery($sql);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOnePackagePhoto($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];

    $dir_dest = '../images/rooms/gallery/';
    $dir_dest_thumb = '../images/rooms/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `packages_photos` SET "
            . "`caption` = '" . mysql_real_escape_string($_POST['caption']) . "'"
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

//end of packages//
//Offers//


function addNewoffers($post, $file) {

    $addImgName = filename();

    $dir_dest = '../images/offers/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 400;
        $handle->image_y = 520;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $query = "INSERT INTO `offers` (title, Price, Discount, Short_description, Long_description, image_name)
VALUES ('" . mysql_real_escape_string($_POST['title']) . "','" . mysql_real_escape_string($_POST['Price']) . "','" . mysql_real_escape_string($_POST['Discount']) . "','" . mysql_real_escape_string($_POST['Short_description']) . "', '" . mysql_real_escape_string($_POST['Long_description']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAlloffers() {

    $query = "SELECT * FROM `offers` ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneoffers($id) {

    $query = "SELECT * FROM `offers` WHERE `id` = '$id'";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneoffers($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];

    $dir_dest = '../images/offers/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 400;
        $handle->image_y = 520;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `offers` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . "`Price` = '" . mysql_real_escape_string($_POST['Price']) . "',"
            . "`Discount` = '" . mysql_real_escape_string($_POST['Discount']) . "',"
            . " `Short_description` = '" . mysql_real_escape_string($_POST['Short_description']) . "', "
            . " `Long_description` = '" . mysql_real_escape_string($_POST['Long_description']) . "' "
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

//end of offers//
//Activities //

function addNewActivitie($post, $file) {

    $addImgName = filename();

    $dir_dest = '../images/activities/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $query = "INSERT INTO `activities` (title, short_description, description, image_name)
VALUES ('" . mysql_real_escape_string($_POST['title']) . "', '" . mysql_real_escape_string($_POST['short_description']) . "', '" . mysql_real_escape_string($_POST['description']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllActivities() {

    $query = "SELECT * FROM `activities` ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneActivitie($id) {

    $query = "SELECT * FROM `activities` WHERE `id` = '$id' LIMIT 1";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneActivitie($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];
    $dir_dest = '../images/activities/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `activities` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . "`short_description` = '" . mysql_real_escape_string($_POST['short_description']) . "',"
            . " `description` = '" . mysql_real_escape_string($_POST['description']) . "' "
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

function addNewActivitiePhoto($post, $file) {

    $addImgName = filename();

    $dir_dest = '../images/activities/gallery/';
    $dir_dest_thumb = '../images/activities/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
        }
    }

    $db = new DB();

    $query = "INSERT INTO `activities_photos` (activities_id, caption, image_name)
VALUES ('" . mysql_real_escape_string($_POST['id']) . "', '" . mysql_real_escape_string($_POST['caption']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllActivitiePhotos($id) {

    $query = "SELECT * FROM `activities_photos` WHERE `activities_id` = '$id' ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneActivitiePhoto($id) {

    $sql = "SELECT * FROM `activities_photos` WHERE `id` = '$id'";

    $db = new DB();
    $result = $db->readQuery($sql);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneActivitiePhoto($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];

    $dir_dest = '../images/activities/gallery/';
    $dir_dest_thumb = '../images/activities/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `activities_photos` SET "
            . "`caption` = '" . mysql_real_escape_string($_POST['caption']) . "'"
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

//Attractions //

function addNewAttraction($post, $file) {

    $addImgName = filename();

    $dir_dest = '../images/attractions/';
    $dir_dest_thumb = '../images/attractions/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 750;
        $handle->image_y = 450;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
        }
    }

    $db = new DB();

    $query = "INSERT INTO `attractions` (title, short_description ,description, image_name)
VALUES ('" . mysql_real_escape_string($_POST['title']) . "', '" . mysql_real_escape_string($_POST['short_description']) . "', '" . mysql_real_escape_string($_POST['description']) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllAttractions() {

    $query = "SELECT * FROM `attractions` ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneAttraction($id) {

    $query = "SELECT * FROM `attractions` WHERE `id` = '$id'";

    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneAttraction($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];
    $dir_dest = '../images/attractions/';
    $dir_dest_thumb = '../images/attractions/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 750;
        $handle->image_y = 450;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `attractions` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . " `short_description` = '" . mysql_real_escape_string($_POST['short_description']) . "',"
            . " `description` = '" . mysql_real_escape_string($_POST['description']) . "' "
            . "WHERE `id` = '$id' ";



    $result = $db->readQuery($sql);

    return $result;
}

function addNewAttractionPhoto($post, $file) {

    $id = $_POST['id'];

    $addImgName = filename();

    $caption = $_POST['caption'];

    $dir_dest = '../images/attractions/gallery/';
    $dir_dest_thumb = '../images/attractions/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 900;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
        }
    }

    $db = new DB();

    $query = "INSERT INTO `attractions_photos` (attraction_id, caption, image_name)
VALUES ('" . mysql_real_escape_string($id) . "', '" . mysql_real_escape_string($caption) . "', '" . mysql_real_escape_string($imgName) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function getAllAttractionPhotos($id) {

    $query = "SELECT * FROM `attractions_photos` WHERE `attraction_id` = '$id' ORDER BY sort ASC";

    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneAttractionPhoto($id) {

    $sql = "SELECT * FROM `attractions_photos` WHERE `id` = '$id'";

    $db = new DB();
    $result = $db->readQuery($sql);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function updateOneAttractionPhoto($post, $file) {

    $imageold = $_POST['oldImg'];
    $id = $_POST['id'];

    $dir_dest = '../images/attractions/gallery/';
    $dir_dest_thumb = '../images/attractions/gallery/thumb/';

    $handle = new Upload($file['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 900;
        $handle->image_y = 500;



        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 430;
        $handle->image_y = 305;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $sql = "UPDATE `attractions_photos` SET "
            . "`caption` = '" . mysql_real_escape_string($_POST['caption']) . "'"
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
}

//Testimonial

function addNewTestimonial($post, $file) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];


    $dir_dest = 'images/testimonial/';
    $handle = new Upload($file['image']);
    $addImgName = filename();
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 300;
        $handle->image_y = 300;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    $db = new DB();
    $query = "INSERT INTO `testimonial` (name, description, image_name, status)
VALUES ('" . mysql_real_escape_string($name) . "', '" . mysql_real_escape_string($description) . "', '" . mysql_real_escape_string($imgName) . "', '" . mysql_real_escape_string($status) . "')";

    $result = $db->readQuery($query);
    return $result;
}

function addNewTestimonialBySyte($post, $file) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];


    $dir_dest = 'images/testimonial/';
    $handle = new Upload($file['image']);
    $addImgName = filename();
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $addImgName;
        $handle->image_x = 300;
        $handle->image_y = 300;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    $db = new DB();
    $query = "INSERT INTO `testimonial` (name, description, image_name, status)
VALUES ('" . mysql_real_escape_string($name) . "', '" . mysql_real_escape_string($description) . "', '" . mysql_real_escape_string($imgName) . "', '" . mysql_real_escape_string($status) . "')";

    $result = $db->readQuery($query);
    return $result;
}

function getAllTestimonials() {
    $query = "SELECT * FROM `testimonial` ORDER BY sort ASC";
    $db = new DB();

    $result = $db->readQuery($query);

    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getAllActiveTestimonials() {
    $db = new DB();
    $sql = "SELECT * FROM `testimonial` WHERE `status` = '1' ORDER BY sort ASC";
    $result = $db->readQuery($sql);
    $array_res = array();
    while ($row = mysql_fetch_array($result)) {
        $property = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'image_name' => $row['image_name'],
            'status' => $row['status'],
            'sort' => $row['sort'],
        );
        array_push($array_res, $property);
    }
    return $array_res;
}

function getOneTestimonial($id) {
    $query = "SELECT * FROM `testimonial` WHERE `id` = '$id' LIMIT 1";
    $db = new DB();
    $result = $db->readQuery($query);
    $row = mysql_fetch_assoc($result);
    return $row;
}

function updateOneTestimonial($post, $file) {
    $imageold = mysql_real_escape_string($_POST['imageold']);
    $id = mysql_real_escape_string($_POST['id']);
    $dir_dest = 'images/testimonial/';
    $handle = new Upload($file['image']);
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 300;
        $handle->image_y = 300;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    $db = new DB();
    $sql = "UPDATE `testimonial` SET "
            . " `name` = '" . mysql_real_escape_string($_POST['name']) . "',"
            . " `description` = '" . mysql_real_escape_string($_POST['description']) . "',"
            . " `status` = '" . mysql_real_escape_string($_POST['status']) . "'"
            . "WHERE `id` = '$id' ";
    $result = $db->readQuery($sql);
    return $result;
}

//Tour Package
function AllPackages() {

    $query = "SELECT * FROM `tour_package` ORDER BY queue ASC";
    $db = new DB();
    $result = $db->readQuery($query);
    $array_res = array();

    while ($row = mysql_fetch_array($result)) {
        array_push($array_res, $row);
    }

    return $array_res;
}

function getOneTourPackageByID($id) {

    $query = "SELECT `id`,`title`,`image_name`,`price`,`short_description`,`description`,`queue` FROM `tour_package` WHERE `id`=" . $id;
    $db = new DB();
    $result = $db->readQuery($query);

    $row = mysql_fetch_assoc($result);

    return $row;
}

function createTourpackage($post, $file) {

    $addImgName = filename();
    $dir_dest = '../images/packages/';
    $dir_dest_thumb = '../images/packages/thumb/';
    $dir_dest_thumb1 = '../upload/tour-package/thumb1/';
    $handle = new Upload($file['image']);
    $imgName = null;

//    $addImgName = filename();
//
//    $dir_dest = '../images/packages/';
//
//    $handle = new Upload($file['image']);
//
//    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
//        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 577;
        $handle->image_y = 545;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
//        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 65;
        $handle->image_y = 65;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
//        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 190;
        $handle->image_y = 111;

        $handle->Process($dir_dest_thumb1);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $db = new DB();

    $query = "INSERT INTO `tour_package` (title,image_name,price,short_description,description)
VALUES ('" . mysql_real_escape_string($_POST['title']) . "','" . mysql_real_escape_string($imgName) . "', '" . mysql_real_escape_string($_POST['price']) . "', '" . mysql_real_escape_string($_POST['short_description']) . "','" . mysql_real_escape_string($_POST['description']) . "')";

    $result = $db->readQuery($query);

    return $result;
}

function updateOneTourPackage($post, $file) {

    $dir_dest = '../images/packages/';
    $dir_dest_thumb = '../images/packages/thumb/';
    $dir_dest_thumb1 = '../upload/tour-package/thumb1/';
    $handle = new Upload($file['image']);
    $imgName = null;


    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 577;
        $handle->image_y = 545;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 65;
        $handle->image_y = 65;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imageold;
        $handle->image_x = 65;
        $handle->image_y = 65;

        $handle->Process($dir_dest_thumb1);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    
     $db = new DB();

    $sql = "UPDATE `packages` SET "
            . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
            . "`duration` = '" . mysql_real_escape_string($_POST['duration']) . "',"
            . "`short_description` = '" . mysql_real_escape_string($_POST['short_description']) . "',"
            . " `description` = '" . mysql_real_escape_string($_POST['description']) . "' "
            . "WHERE `id` = '$id' ";

    $result = $db->readQuery($sql);

    return $result;
    
    
}
