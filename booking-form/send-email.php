<?php

//----------------------Company Information---------------------

$comany_name = "Sri Lanka Holiday Tours, Hikkaduwa";
$website_name = "www.srilankasafari.tours";
$comConNumber = "+94 71 244 5998";
//$comEmail = "danuththara10@gmail.com";
$comEmail = "srilankataximirissa@gmail.com";
$from = 'info@srilankasafari.tours';
$replay = 'srilankataximirissa@gmail.com';





//----------------------CAPTCHACODE---------------------
session_start();

 
$response = array();
if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
    $response['status'] = 'incorrect';
    $response['msg'] = 'Security Code is invalid';
    echo json_encode($response);
    exit();
}

//----------------------Visitor Information---------------------


$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_country = $_POST['country'];
$visitor_phone = $_POST['visitor_phone'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$no_of_adults = $_POST['no_of_adults'];
$no_of_children = $_POST['no_of_children'];
$tour_package = $_POST['tour_package'];
$message = $_POST['message'];

date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'];

include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $replay . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Sending mail

if (mail($visitor_email, $visitor_message, $headers) && mail($replay, $company_message, $headers)) {
    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'correct';
    $response['msg'] = "Could nod be sent your message";
    echo json_encode($response);
    exit();
} 
