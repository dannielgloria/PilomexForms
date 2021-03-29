<?php
//header("Location: http://pilomex.com/contact_form.php");
header("Location: http://pilomex.com");

    $to = "acpilomex@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $csubject = $_REQUEST['company'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Tienes un mensaje de tu página web de {$csubject}";

    $logo = 'https://www.pilomex.com/img/Pilomex.png';
	$link = 'https://www.pilomex.com';
	$style = 'width:108px;height:108px;';

	$body = "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' style='{$style}' alt='PILOMEX'></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Nombre:</strong> {$name}</td>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $body .= "<td style='border:none;'><strong>Teléfono:</strong> {$number}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Empresa:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	$send = mail($to, $csubject, $body, $headers);

?>