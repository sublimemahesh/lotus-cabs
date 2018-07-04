
<?php

//----------------------Company Information---------------------

$comany_name = "Cycling Tours, Galle";
$website_name = "www.srilankacyclingtour.com";
$comConNumber = "(+94) 77 365 4141, (+94) 91 312 7744";
$comEmail = "info@srilankacyclingtour.com";
$from = 'info@srilankacyclingtour.com';

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
$tour_package = $_POST['tour_package'];
$message = $_POST['message'];


date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'];

include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers1 = "From: " . $from . "\r\n";
$headers1 .= "Reply-To: " . $comEmail . "\r\n";
$headers1 .= "MIME-Version: 1.0\r\n";
$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$headers2 = "From: " . $from . "\r\n";
$headers2 .= "Reply-To: " . $visitor_email . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Sending mail

if (mail($visitor_email, $subject, $visitor_message, $headers1) && mail($comEmail, $subject, $company_message, $headers2)) {
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



//----------------------Company Information---------------------

$comany_name = "Cycling Tours, Galle";
$website_name = "www.srilankacyclingtour.com";
$comConNumber = "(+94) 77 365 4141, (+94) 91 312 7744";
$comEmail = "info@srilankacyclingtour.com";
$from = 'info@srilankacyclingtour.com';

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
$tour_package = $_POST['tour_package'];
$message = $_POST['message'];


date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'];

include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers1 = "From: " . $from . "\r\n";
$headers1 .= "Reply-To: " . $comEmail . "\r\n";
$headers1 .= "MIME-Version: 1.0\r\n";
$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$headers2 = "From: " . $from . "\r\n";
$headers2 .= "Reply-To: " . $visitor_email . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Sending mail

if (mail($visitor_email, $subject, $visitor_message, $headers1) && mail($comEmail, $subject, $company_message, $headers2)) {
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

