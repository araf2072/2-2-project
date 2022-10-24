<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

$con = mysqli_connect("localhost", "ourproje_group6", "LJ83tpPZRM3hrH4", "ourproje_juse");
if (isset($_POST['upload'])) {

    $uid = $_POST['uid'];
    $dp = $_FILES["dp"]["name"];
    $extension = strtolower(substr(strrchr($dp, '.'), 1));
    $newfilename = $uid . rand() . "_idcard" . "." . $extension;
    $folder = "dbfiles/" . $newfilename;
    $tempname = $_FILES["dp"]["tmp_name"];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    date_default_timezone_set('Asia/Dhaka');
    $token = $uid . rand() . date('Ymdhis');

    $sql = "INSERT INTO `user`(`u_id`, `email`, `fname`, `lname`, `password`, `gender`, `id_image`,`token`) VALUES ('$uid','$email','$fname','$lname','$password','$gender','" . $folder . "','$token')";
    mysqli_query($con, $sql);
    $folder="others/dbfiles/" . $newfilename;
    move_uploaded_file($tempname, $folder);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.ourprojectju.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ourproject6@ourprojectju.com';                     //SMTP username
        $mail->Password   = 'RF==ti%KrSqr';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


        $mail->setFrom('ourproject6@ourprojectju.com', 'JUSE');
        $mail->addAddress($email);     //Add a recipient


        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Please activate your account';
        $msgbody = "Hello " . "" . $fname . ",<br> To activate your account, please click on the link below to verify your email address. Once activated, you’ll have full access to JU Social and e-Learning Platform." . " <br> Link : https://ourprojectju.com/signup-after.php?token=" . $token;
        $mail->Body    = $msgbody;
        $mail->send();
    } catch (Exception $e) {
        echo "<script>alert('Email is not sent to User!');</script>";
    }
    header("Location: signup-after.php?email=$email");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Registration | JUSE</title>
    <link rel="stylesheet" href="css/signupsocial.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/icob.svg">


</head>

<body>
    <div class="signup-form">
        <form method="post" action="" enctype="multipart/form-data">
            <h2>Sign Up</h2>
            <p>It's quick and easy.</p>
            <hr>
            <div class="form-group">
                <div class="input-group x">
                    <span class="input-group-addon xd"><i class="fa-solid fa-face-smile"></i></span>
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                    <input style="margin-left:.5rem" type="text" class="form-control" name="lname" placeholder="Surname" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="uid" placeholder="Registration ID" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                        <i class="fa fa-check"></i>
                    </span>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa-solid fa-image"></i></span>
                    <input name="dp" type="file" required id="files" class="hidden" />
                    <label id="jaura" class="form-control" style="color:rgb(168, 158, 158);cursor: pointer;padding-top:1rem" for="files">Upload
                        Your ID Card's Photo</label>

                </div>
            </div>
            <h4>Gender</h4>
            <div class="form-group">
                <div class="input-group">
                    <input style="margin-right:1rem;" type="radio" class="form-check-input" id="radio1" name="gender" value="Male" checked>Male
                    <label style="margin-right:1rem;" class="form-check-label" for="radio1"></label>
                    <input style="margin-right:1rem;" type="radio" class="form-check-input" id="radio2" name="gender" value="Female">Female
                    <label class="form-check-label" for="radio2"></label>
                </div>
            </div>
            <div class="form-group" style="display:flex;align-items:center;justify-content:center">
                <button name="upload" style="width: 80%;" type="submit" class="btn btn-success btn-lg">Sign Up</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var geekss = e.target.files[0].name;
                $("#jaura").html("");
                $("#jaura").html(geekss);
            });
        });
    </script>
</body>

</html>