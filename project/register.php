<?php
require_once 'includes/header.php';
?>
    <div>
        <h1>Rigester Page</h1>
        <p>Already Have Account?<a href="login.php">Login Here...</a></p>
        <form action="includes/register-inc.php" method = "post">
            <input type = "text" name = "username" placeholder = "Username">
            <input type = "password" name = "password" placeholder = "Password">
            <input type = "password" name = "confirmPassword" placeholder = "Confirm Password">
            <button type="submit" name = "submit">Rigester Now</button>
        </form>
    </div>   

<?php
require_once 'includes/footer.php';
?>