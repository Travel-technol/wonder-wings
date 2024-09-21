<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with login page registration | codehal</title>
    <link rel="stylesheet" href="stylse.css">
</head>

<body>

<?php  require "particals/_navbar.php"?>


    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>login</h2>
            <form action="#">
                
               
               <div class="input-box">
                   <span class="icon"><ion-icon name="mail"></ion-icon></span>
                   <input type="email" required>
                   <label>email</label>
               </div>
               <div class="input-box">
                   <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                   <input type="password" required>
                   <label>password</label>
               </div>
            <div class="remember-forgot">
               <label><input type="checkbox">Remember me</label>
               <a href="#">forgot Password?</a>
              </div>
            <button type="submit" class="btn">Login</button>
            <div class="login-register">
               <p>Dont have an account?<a href="#" class="register-link">register</a></p>
            </div>
            </form>
          </div>



    </div>
    <script src="script.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    

            
</body>
</html>