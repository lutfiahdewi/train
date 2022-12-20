<?php include 'header.php'; 
if (!isset($_COOKIE['token'])) {
    header("Location: signin.php");
}
?>

<link rel="stylesheet" href="css/style.css">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Profile</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name">Name<i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input class="ms-5" type="text" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Username<i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input class="ms-5" type="text" name="username" id="username"/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail<i class="zmdi zmdi-email"></i></label>
                        <input class="ms-5" type="email" name="email" id="email"/>
                    </div>
                    <div class="form-group form-button"><a href="editProfile" style="color:inherit">
                        <input type="submit" name="signup" id="register-form" class="form-submit" value="Update Profile" /></a>
                    </div>
                </form>
				<p class="my-2">Click <a href="chgpass.php" class="signup-image-link">here</a> to change password</p>
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