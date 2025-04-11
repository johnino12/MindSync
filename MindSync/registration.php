<?php
include 'views/header.php';
?>

<form id="loginform" action="models/register_user.php" method="POST">
    <label for="uname">Username</label>
    <?php
        if(isset($_GET['uname_error'])){
            if($_GET['uname_error']){
                echo "<span class='error_msg'> Invalid Username* </span>";
            }
        }
    ?>
    <input type="text" name="uname" id="uname" placeholder="Username" required>
    <label for="email">Email</label>
    <?php
        if(isset($_GET['email_error'])){
            if($_GET['email_error']){
                echo "<span class='error_msg'> Invalid Email* </span>";
            }
        }
    ?>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <label for="fname">First name</label>
    <input type="text" name="fname" id="fname" placeholder="First name" required>
    <label for="lname">Last name</label>
    <input type="text" name="lname" id="lname" placeholder="Last name" required>
    
    <div id="cbgender">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    
    <label for="bdate">Birthdate</label>
    <input type="date" name="bdate" id="bdate" placeholder="bdate" required>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    <label for="conpass">Confirm Password</label>
    <?php
        if(isset($_GET['password_error'])){
            if($_GET['password_error']){
                echo "<span class='error_msg'> Password did NOT match* </span>";
            }
        }
    ?>
    <input type="password" name="conpass" id="conpass" placeholder="Confirm Password" required>
    
    <div id="eula">
        <input type="checkbox" name="eula" id="eula" value="eula">
        <label for="eula">Agree to <a href="">End user license</a></label>
        
    </div>
    <input type="submit" value="Register">  
</form>

<?php
include 'views/footer.php';
?>
