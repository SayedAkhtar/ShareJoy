<?php
session_start();
$servername = 'localhost';
$username = 'admin';
$password = 'admin';
$dbname = 'practice_reg-form';
$tablename = 'share_joy-user';

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die ("Not Connected =".$conn->connect_error );
}

$conn->select_db($dbname);


if (isset($_POST['mobileNumber']) && isset($_POST['email']) && isset($_POST['password']) ){
    $mobile = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // if($insert = $conn->query("INSERT INTO `$tablename`(`mobile`, `email`, `password`) VALUES ('$mobileNumber', '$email' , '$password')")){
    // }
    // else{
    //     die("Not Inserted");
    // }
}
else{
    
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- <h1>Welcome 
    </h1>

     -->
<div class="welcome-container">
    <div class="welcome-content">

        <div class="welcome-content-text container">
                <?php 
            if(isset($_POST['email'])){ ?>
                <h1>Thank You For Signing In With Us.</h1>
                    <br>
                <p>We are very much obliged to have you on board. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, dicta blanditiis eveniet pariatur ex totam.</p>
                <br>
                <p>You will Be Automatically redirected to the login page in 3 seconds</p>
                <div class="loader">
                    <img src="img/loading.gif" alt="">
                </div>
            <?php }
            elseif(isset($_SESSION["email"])){ ?>
                <h1>Hello</h1>
                <br>
                <h1>Sayed182@gmail.com</h1>

                <br><br>

                <p>You Visited This Page : <span>
                                                <?php if (isset($_SESSION["count"])){
                                                    echo $_SESSION["count"];
                                                }?>
                                            </span> Times
                </p>

            <?php } ?>
            

            

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script>
    <?php if(isset($_POST['email'])){ ?>
    $(document).ready(function(){
        setTimeout(function(){
            window.location.href = " http://localhost/ProjectFiles/shareJoy_Intern-1/welcome.php";
        },3000);
    });
    <?php } ?>
</script>
</body>
</html>