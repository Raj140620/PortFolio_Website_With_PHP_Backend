<?php
use PHPMailer\PHPMailer\PHPMailer;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';



if (isset($_POST['send'])) {
$conn=mysqli_connect("localhost","root","","websiteinfo") or die("Connection Failed : ". mysqli_connect_error());
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO userinfo(Name,Email,Message) VALUES ('$name','$email','$message')";
 $result = mysqli_query($conn, $sql) or die("Query Failed");

if (isset($_POST['send'])) {
  $massage = file_get_contents('Thankyoumail.html');
        //  Thanking Email Function
        $mail = new PHPMailer;
        $mail->isSMTP();
 //$mail->SMTPDebug = 2; //To Debug The Error In Mail Send(Deactived By Me)
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'rb436631@gmail.com';
        $mail->Password = 'hxbpemlfbvqfefwp';
        $mail->setFrom('rb436631@gmail.com', 'Raj Kumar Behera');
        $mail->addReplyTo('rb436631@gmail.com', 'Raj Kumar Behera');
        $mail->addAddress($email, $name);
        $mail->Subject = "Thank You " . $name;
        $mail->msgHTML(file_get_contents($massage));
        $mail->Body = $massage;
//$mail->addAttachment('attachment.txt'); //You Can Send Atachment Too (Deactived By Me)
        if ($mail->send()) {
           header("Location:Thankyoupage.html");
//echo 'Mailer Error: ' . $mail->ErrorInfo;  //To Dispaly The Error In Mail Send(Deactived By Me)
        } 
    }
  }

?>