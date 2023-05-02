
<!DOCTYPE html>
<html lang="en">

<head>
 <?php
    include ('connection.php');
    error_reporting(0);
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if (!$_POST['reg_user']){

    }
    
    else{
      $sql = "INSERT into Data (Email, Password)
      values ('$userEmail', '$userPassword') ";

      if (mysqli_query($conn, $sql)){

      }
      else{

      }
    }
    

  ?>
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial scale =1.0">
    <title>Water Luv | Login</title>
    <link rel="stylesheet" href="LoginStyle.css")>
</head>

<body>
    <header>
    <image align="left" src="logo.png" alt="waterluv logo" width="95px" height="95px" border="0">
    <nav class="navigation">
        <a href="About-Us.php">About Us</a>
        <a href="ProductsServices.php">Products and Services</a>
        <a href="Orders.php">Orders</a>
        <a href="register.php">Login</a>
    </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="email" name="email" value="<?php echo $usereemail; ?>" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="eye-off-outline"></ion-icon></span>
                    <input type="password" name="password" value="<?php echo $userppassword; ?>" required>
                    <label>Password</label>
                </div>
                <input type="button" onclick="clickAlert()" value="Login">
                <div class="login-register">
                    <p>NOT A MEMBER?<a href="#" class="register-link"> SIGN UP NOW!</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <h2>Create An Account </h2>
            <p style="text-align:center">Create an account to enjoy all the products and services by Water Luv</p>
            <form action="register.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="eye-off-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <input type=submit name=reg_user value=Register>
                <div class="login-register">
                    <p>Already Have An Account?<a href="#" class="login-link"> Sign In</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
function clickAlert() {
    alert("Login Successful!");
}
</script>
</body>
</html>