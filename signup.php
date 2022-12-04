<?php include 'header.php'; 
if (isset($_COOKIE['token'])) {
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="css/style.css">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form action="api_signup.php" onsubmit="return validate()" method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="username" id="username" placeholder="Your Userame" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="register-form" class="form-submit" value="Register" />
                    </div>
                </form>
                <p class="my-2">Already have account? Click <a href="signup.php" class="signup-image-link">here</a> to sign in</p>
                <div id="errorMessagesBox"></div>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
            </div>
        </div>
    </div>
</section>

</div>

<?php include 'footer.php'; ?>

<!-- This templates was made by Colorlib (https://colorlib.com) -->