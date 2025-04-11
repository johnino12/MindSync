<?php
include 'views/header.php';
?>
<form id="loginform" action="models/login_user.php" method="POST">
    <label for="uname">Username/Email</label>
    <input type="text" name="uname" id="uname" placeholder="Username/Email" required>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    
    <div id="signedin">
        <input type="checkbox" name="signedin" id="signedin" value="0">
        <label for="signedin">Keep me signed in</label>
    </div>
    
    <input type="submit" value="Login">
    <label for="forgot"><a href="">Forgot Password?</a></label>
</form>

<?php
include 'views/footer.php';
?>
