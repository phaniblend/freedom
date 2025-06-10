<?php
require "../vendor/autoload.php";

use SendGrid\Mail\Mail;

$message = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><font color="#f35D14" size="2" face="Tahoma">Name:</font></td>
    <td width="90%" height="22"><font color="#333333" size="-1" face="Tahoma">' . $_POST['name'] . '</font></td>
  </tr>
       
  <tr>
    <td><font color="#f35D14" size="2" face="Tahoma">E-mail :</font></td>
    <td width="90%" height="22"><font color="#333333" size="-1" face="Tahoma">' . $_POST['email'] . '</font></td>
  </tr>
   
  <tr>
    <td><font color="#f35D14" size="2" face="Tahoma">Message :</font></td>
    <td width="90%" height="22"><font color="#333333" size="-1" face="Tahoma">' . nl2br($_POST['message']) . '</font></td>
  </tr>
</table>';

$file = "mail-" . time() . ".txt";
file_put_contents($file, $message);

// Send email
$email = new Mail();
$email->setFrom("settyphani.dev@gmail.com", "Setty Venkat");
$email->setSubject('You have a new message from http://capitalrecruiters.net/');
$email->addTo('senagasetty@gmail.com');
//$email->addTo('settyphani.dev@gmail.com');
$email->addContent("text/html", $message);

// Use environment variable for SendGrid API key
$sendgrid_api_key = getenv('SENDGRID_API_KEY') ?: 'your-sendgrid-api-key-here';
$sendgrid = new \SendGrid($sendgrid_api_key);
$response = $sendgrid->send($email);

file_put_contents($file, "\n\n\n\n\n\n" . implode("\n-\n", [
    "Sendgrid result",
    "Status code: " . $response->statusCode(),
    "Header:\n" . json_encode($response->headers(), JSON_PRETTY_PRINT),
    "Body:\n" . $response->body(),
  ]), FILE_APPEND);

if ($response->statusCode() >= 400) {
  exit();
}

echo "success";
