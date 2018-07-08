
<?php

//----------------------Company Information---------------------

$comany_name = "Lotu Cabs, Galle";
$website_name = "www.lotuscabs.com";
$comConNumber = "+94 91 722 3223";
$comEmail = "contact@lotuscabs.lk";
$from = 'contact@lotuscabs.lk';

//----------------------CAPTCHACODE---------------------
session_start();

$response = array();

//----------------------Visitor Information---------------------

$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$start_from = $_POST['start_from'];
$drop_to = $_POST['drop_to'];
$passengers = $_POST['passengers'];
$pick_up_date = $_POST['date'];
$description = $_POST['description'];


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

$comany_name = "Lotu Cabs, Galle";
$website_name = "www.lotuscabs.com";
$comConNumber = "+94 91 722 3223";
$comEmail = "contact@lotuscabs.lk";
$from = 'contact@lotuscabs.lk';

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
$start_from = $_POST['start_from'];
$drop_to = $_POST['drop_to'];
$passengers = $_POST['passengers'];
$pick_up_date = $_POST['date'];
$description = $_POST['description'];


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

