<?php
include('../include/db.php');

session_start();
if(isset($_SESSION['user_success_id'])){
    header('location:index.php');
}

if(isset($_POST['regBtn'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $department_institute=$_POST['department_institute'];
    $uvid = $_POST['uvid'];
    $blood_grp=$_POST['blood_grp'];
    $phone = $_POST['phone'];
    $hall = $_POST['hall'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $conpass = $_POST['conpassword'];
    $image = $_FILES['image']['name'];
    $input_errors = array();

    if(empty($name))
    {
        $input_errors['name'] = "Name field is Required.";
    }
    if(empty($username))
    {
        $input_errors['username'] = "Userame field is Required.";
    }
    if(empty($email))
    {
        $input_errors['email'] = "Email field is Required.";
    }
    if(empty($batch))
    {
        $input_errors['batch'] = "Batch field is Required.";
    }
    if(empty($department_institute))
    {
        $input_errors['department_institute'] = "Department/Institute field is Required.";
    }
    if(empty($uvid))
    {
        $input_errors['uvid'] = "ID field is Required.";
    }
    if(empty($blood_grp))
    {
        $input_errors['blood_grp'] = "Blood Group field is Required.";
    }
    if(empty($hall))
    {
        $input_errors['hall'] = "Hall field is Required.";
    }
    if(empty($phone))
    {
        $input_errors['phone'] = "Phone field is Required.";
    }
    if(empty($address))
    {
        $input_errors['address'] = "Address field is Required.";
    }
    if(empty($password))
    {
        $input_errors['password'] = "Password field is Required.";
    }
    if(empty($conpass))
    {
        $input_errors['conpass'] = "Confirm Password field is Required.";
    }

    if(count($input_errors) == 0)
    {

        $sql = "SELECT 'addby' FROM `students` WHERE students.username = '$username' UNION SELECT 'name' FROM `libraian` WHERE libraian.username = '$username'";
        $result = mysqli_query($con,$sql);
        $number_of_username = mysqli_num_rows($result);
        if($number_of_username == 0){
            $sql = "SELECT 'addby' FROM `students` WHERE students.email = '$email' UNION SELECT 'name' FROM `libraian` WHERE libraian.email = '$email'";
            $result = mysqli_query($con,$sql);
            $number_of_email = mysqli_num_rows($result);
            if($number_of_email ==0 )
            {
                if(strlen($password)>=5){
                    if($password == $conpass)
                    {
                        $sql = "SELECT * FROM `students` WHERE uid = '$uvid'";
                        $result = mysqli_query($con,$sql);
                        $number_of_id = mysqli_num_rows($result);
                        if($number_of_id== 0)
                        {
                            #$password = password_hash($password,PASSWORD_DEFAULT);
                            $img_ext =pathinfo($image,PATHINFO_EXTENSION);

                            if($img_ext == 'png' || $img_ext == 'PNG' || $img_ext == 'JPG' || $img_ext == 'jpg'){
                                $image = rand(1,9999) . $username .'.' . $img_ext;
                                $sql = "INSERT INTO `students`(`name`, `username`, `email`, `uid`, `batch`,`department_institute`,`pass`, `phone`, `address`, `image`, `status`,`blood_grp`,`hall`) VALUES ('$name','$username','$email','$uvid','$batch','$department_institute','$password','$phone','$address','$image',0,'$blood_grp','$hall')";
                                $result = mysqli_query($con,$sql);

                                $img_upload = '../images/student/' . $image;
                                move_uploaded_file($_FILES['image']['tmp_name'], $img_upload);
                                if($result) {
                                    $_SESSION['insert_success'] = 1;
                                }else{
                                    $_SESSION['insert_fail'] = 1;
                                }
                            }
                            else{
                                $img_ext_dont_match= "Image should be PNG or JPEG";
                            }
                        }else{
                               $double_id = "ID is exists!"; 
                        }

                    }else{
                        $password_dont_match = "Password Doesn't match : )";
                    }

                }else{
                    $password_short = "Password is to short! Password more than 6 character";

                }

            }else{
                $doubleemail = "email is exists : )";
            }
        }else{
            $doubleuser = "Username is exists : )";
        }

        /* */
    }

}#isset

?>


