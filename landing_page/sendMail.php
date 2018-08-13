<?php
$root = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; //$_SERVER[REQUEST_URI]

/*[inputFirstName] => asd
[inputLastName] => sad
[inputEmail] => da
[inputCountry] => sda */
// Import  PHPMailer classes into the global namespace
// These must be at  the top of your '37m<GSK7%%&aab!!' script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $_ENV["GMAIL_USERNAME"];//$_ENV["GMAIL_USERNAME"];//;                 // SMTP username
    $mail->Password = $_ENV["GMAIL_PASSWORD"];//;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to


    //Recipients
    $mail->setFrom('info@medico.health', 'Mailer');
    $mail->addAddress($_POST['inputEmail'], $_POST['inputFirstName'].' '.$_POST['inputLastName']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    $mail->addAttachment("./documents/Medicohealth_lightpaper.pdf", 'wp-beta.pdf');
    $mail->addAttachment("./documents/Medicohealth_lightpaper.pdf", 'one-pager.pdf');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Medicohealth WHITEPAPER';
    $mail->Body    = 'Thank you for downloading our whitepaper. If you like our project feel free to support us!';
    $mail->AltBody = 'Thank you for downloading our whitepaper. If you like our project feel free to support us!';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    header("HTTP/1.1 400 Bad Request");
    echo '<br><br><br>Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
<?php
/*$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];*/
  /*$name = 'name';
  $visitor_email = 'ninoserec@gmail.com';
  $message = 'message';
  $email_from = 'info@medicohealth.health';
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $name.\n".
                          "Here is the message:\n $message".

  $to = "ninoserec@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);




function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}*/
?>
