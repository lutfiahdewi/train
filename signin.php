<?php 
include 'header.php'; 
if (isset($_COOKIE['token'])) {
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="css/style.css">

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form" action="api_signin.php">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                    </div>
                </form>
                <p class="my-2">Don't have account? Click <a href="signup.php" class="signup-image-link">here</a> to create account</p>
            </div>
        </div>
    </div>
</section>

</div>

<?php include 'footer.php'; ?>

<!-- This templates was made by Colorlib (https://colorlib.com) -->