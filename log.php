<?php
session_start();
if(isset($_SESSION['admin_success_id'])){
    header('location:librarian/index.php');
}
if(isset($_SESSION['user_success_id'])){
    header('location:student/index.php');
}
include('include/db.php');
if(isset($_POST['btn']))
{
    $username = $_POST['username'];
    $password= $_POST['password'];
    # $password = password_hash($password,PASSWORD_DEFAULT);
    $sql = "SELECT * FROM `students` WHERE `username` = '$username' AND `pass` = '$password' ";
    $result = mysqli_query($con,$sql);
    $row_count = mysqli_num_rows($result);
    $user_info = mysqli_fetch_assoc($result);

    if($row_count == 1){
        if($user_info['status'] == 1)
        {
        $_SESSION['user_success_id'] = $user_info['id'];
        header('location:student/index.php');

    }else{
        $status_not_active = "Status not active! Please contact with librarin";
    }
}

    $sql = "SELECT * FROM `libraian` WHERE `username` = '$username' AND `password` = '$password' ";
    $result = mysqli_query($con,$sql);
    $row_count = mysqli_num_rows($result);
    $admin_info = mysqli_fetch_assoc($result);

    if($row_count == 1){

        $_SESSION['admin_success_id'] = $admin_info['id'];
        header('location:librarian/index.php');

    }else{
        $input_error = "User name or Password doesnt match!!";
    }
}

?>
