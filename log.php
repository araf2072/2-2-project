<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="asstets/Fonts/css/all.min.css">


    <title>Ju library</title>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="main-buttons" >
        <div class="img-box text-center mb-5 pb-5">
            <img src="images/logoju.png" alt="" class="img-fluid">
        </div>
        <div class="row ">
            <div class="col-sm-8 offset-sm-2 col-12">
                <a href="student/login.php" class="btn btn-info btn-block"><i class="fas fa-book-reader mr-2"></i> Student</a>
                <a href="librarian/login.php" class="btn btn-info btn-block"> <i class="fas fa-book-reader mr-2"></i> Librarian</a>
                <a href="index.php" class="btn btn-block"> <i class="fas fa-book-reader mr-2"></i>Back to Home</a>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</div>
<style>
    .header{
        background-image: url("images/lib.jpg");
        background-repeat: no-repeat;
        background-position: center top;
        background-size: cover;
        min-height: 100vh;

    }
    .main-buttons{
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 25px;
        padding-bottom: 45px;
        border-radius: 5px;
        background: rgba(245, 246, 250, 1);
    }
</style>
</body>
</html>

