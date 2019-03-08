<?php
error_reporting(0);
session_start();
$servername = 'localhost';
$username = 'admin';
$password = 'admin';
$dbname = 'practice_reg-form';
$tablename = 'share_joy-user';

// Errors in login

$login_fail = 0;

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die ("Not Connected =".$conn->connect_error );
}

$conn->select_db($dbname);

$row = $conn->query("SELECT * FROM `share_joy-user` where `mobile`='7602121828'");


if (isset($_POST['mobileNumber']) && isset($_POST['password'])){
    $mobile = $_POST['mobileNumber'];
    $password = $_POST['password'];
    $row = $conn->query("SELECT * FROM `share_joy-user` WHERE `mobile`='$mobile'");
    if (count($row) == 1){
       $result = $row->fetch_assoc();
       $passENT = $result['password'];
       $email = $result['email'];
       $count = $result['count'];
       if($passENT === $password){
            $count = $count +1;

            if($conn->query("UPDATE `$tablename` SET `count`=$count WHERE `mobile`=$mobile")){
            }
            else{
            }
            $login_fail = 0;
            // echo $_SERVER['REQUEST_URI'];
            $_SESSION["email"] = $email;
            $_SESSION["count"] = $count;
            header("location: http://localhost/ProjectFiles/shareJoy_Intern-1/welcome.php");
            
       }
       else{
           $login_fail++;
       }
    }
}
else{
    // die("Form not fully filled");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareJoy | Login/Sign Up</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="logo-container">
        <img src="img/logo.png" alt="">
    </div>
    <main>
        <div class="container">
        <?php if($login_fail > 0) {?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Wrong Credentials!</strong> Please Check your Number and Password.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>

        <div class="form-container">
            <div class="offer-container bg-white">
                <p>Enjoy 50 % OFF on Sign Up</p>
            </div>
            <div class="container">
                
                <div class="row bg-white">
                    <div class="col-md-5 left-side">
                        <div class="image-bg">
                            <div class="image-content">
                                <div>
                                    <ul class="unstyled-list">
                                    <li><span> <i class="fas fa-headset"></i> </span>Travel Related Enquiry</li>
                                    <li><span> <i class="fas fa-dollar-sign"></i> </span>Affordable Pricing</li>
                                    <li><span> <i class="fas fa-wind"></i> </span>Free Breakfast</li>
                                    <li><span> <i class="fas fa-air-freshener"></i> </span> Relaxing Surrounding</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="form-content login">
                            <h3>Log In</h3>
                            <form action="login.php" method="post" id="login-page">
                                <div class="form-group">
                                    <label for="mobileNumber">Mobile Number</label>
                                    <input type="tel" pattern="[0-9]{3,14}" class="form-control" id="mobileNumber" name="mobileNumber" aria-describedby="emailHelp"  oninvalid="this.setCustomValidity('Please Enter a Valid Mobile Number')"
                                    oninput="setCustomValidity('')" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name='password' required>
                                </div>
                                <button type="submit" class="btn btn-primary">Log In</button>
                            </form>

                            <p class="page-change-text">Not Yet Signed In <a href="index.html" id="show-signin">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>

<!-- ============= Script ========== -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>