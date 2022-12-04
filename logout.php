<?php
if (!isset($_COOKIE['token'])) {
    header("Location: index.php");
}
setcookie('token', "", time() - 3600);
setcookie('role', "", time() - 3600);
unset($_COOKIE['token']);
unset($_COOKIE['role']);
echo "
<script>
alert('Berhasil Log Out.');
   document.location.href='index.php';
</script>";
?>