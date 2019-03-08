<?php
session_start();
$_SESSION["email"] ="";
$_SESSION["count"] ="";
unset($_SESSION["email"]);
unset($_SESSION["count"]);
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
                        <div class="form-content signup">
                            <h3>Sign Up</h3>
                            <form action="welcome.php" method="post" id="signup-page">
                                <div class="form-group">
                                    <label for="mobileNumber">Mobile Number</label>
                                    <input type="tel" pattern="[0-9]{3,14}" class="form-control" id="mobileNumber" name="mobileNumber" aria-describedby="emailHelp"  oninvalid="this.setCustomValidity('Please Enter a Valid Mobile Number')"
                                    oninput="setCustomValidity('')" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group form-check">
                                        <small id="" class="form-text text-muted pb-3">Every field is important</small>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">I accept terms & conditions.</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            <p class="page-change-text">Already Signed Up <a href="login.html" id="show-login">Log in Here</a></p>
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