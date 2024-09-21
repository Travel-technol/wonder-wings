
?>
<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with login page registration | codehal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php  require "particals/_navbar.php"?>

    

    <div class="wrapper">
        

        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>register</h2>
            <form action='/cani/pratik.php' method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="Person"></ion-icon></span>
                    <input type="text" name="text" required>
                    <label>Username</label>
                </div>
        
               <div class="input-box">
                   <span class="icon"><ion-icon name="mail"></ion-icon></span>
                   <input type="email"name="email" required>
                   <label>email</label>
               </div>
               <div class="input-box">
                   <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                   <input type="password" name="password" required>
                   <label>password</label>
               </div>
            <div class="remember-forgot">
               <label><input type="checkbox">Agree to terms & conditionds</label>
            
              </div>
            <button type="submit" class="btn">register</button>
            <div class="login-register">
               <p>Already have an account? <a href="#" class="register-link">  Login</a></p>
            </div>
            </form>
          </div>
    </div>
    <script src="scriptt.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    

            
</body>