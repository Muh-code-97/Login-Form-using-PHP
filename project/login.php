<?php
require_once 'includes/header.php';
?>


    <div>
        <h1>Login Page</h1>
        <p>No Account?<a href="register.php">Regester Here...</a></p>
        <form action="includes/login-inc.php" method = "post">
            <input type = "text" name = "username" placeholder = "Username">
            <input type = "text" name = "password" placeholder = "Password">
            <button type="submit" name="submit">Login</button>
        </form>
    </div> 


<?php
require_once 'includes/footer.php';
?>