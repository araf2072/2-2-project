<?php
require_once 'header.php';
$id = $_SESSION['user_success_id'];
$sql = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
if(isset($_POST["submit"])){
    $name = mysqli_real_escape_string($con,$_POST["name"]);
    $password = mysqli_real_escape_string($con,$_POST["password"]);
    $cpassword= mysqli_real_escape_string($con ,$_POST["cpassword"]);

    if($password === $cpassword){
        if(isset($_FILES["image"])){
        $image_name = $_FILES["image"]['name'];
        $image_tmp_name = $_FILES["image"]['tmp_name'];
        $image_size = $_FILES["image"]['size'];
        $image_new_name = rand() . $image_name;


        if($image_size > 524880){
            echo  "<script>alert('Invalid Image size. Maximum Image size allowed is 5MB.');</script>";
        }else{
            $sql = "UPDATE students  SET name='$name' , pass='$password', image= '$image_new_name' WHERE   id = '{$data["id"]}'";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "<script>alert('Profile Updated Sucessfully.');</script>";
                move_uploaded_file($image_tmp_name, "../images/student/" . $image_new_name);
            }else{
                echo "<script>alert('Profile can not Update.');</script>";
                echo $con->error;
            }
        }
      }
    }

    else{
         echo "<script>alert('Password not matched. Please Try again.');</script>";
     } 
    }


?>
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
            <li><a href="#">My Profile</a></li>
        </ul>
    </div>
</div>


    <style>
        body {
            background-color: whitesmoke;

        }

        input {
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }

        .wrapper {

            margin: auto;
        }
    </style>

    <div class="wrapper">
        <h2>Profile</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <?php
            $sql = "SELECT *FROM students WHERE id = '{$data["id"]}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <div class="inputBox">

                        <input type="text" id="name" name="name" placeholder="Enter Name" value="<?php echo $row['name'];?>"  required>
                    </div>
                    <div class="inputBox">

                        <input type="email" id="email" name="email" placeholder="Enter email" value="<?php echo $row['email'];?>" disabled required>
                    </div>
                    <div class="inputBox">

                        <input type="password" id="password" name="password" placeholder="Enter password" value="<?php echo $row['pass'];?>" required>
                    </div>
                    <div class="inputBox">

                        <input type="Password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="<?php echo $row['pass'];?>" required>
                    </div>
                    <div class="inputBox">

                        <input type="file" accept="image/*" id="image" name="image" required>
                    </div>
                 <img src="../images/student/<?php echo $row['image']?>" width="150px" height="auto" alt=""><hr>
            <?php

                }
            }
            ?>

            <div class="inputBox">
                <button type="submit" name="submit" class="btn btn-info">Update Profile</button>
            </div>



        </form>
    </div>
