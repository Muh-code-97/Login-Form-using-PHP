<?php
require_once 'includes/header.php'
?>
    <div>
    <form action="includes/logout.php" method = "post">
        <h1>Home</h1>
        <button type="submit" name ="submit">Logout</button><br>
        <?php
            if (isset($_SESSION['sessionId'])) {
                echo ("you are loged in");
            }else {
                echo("you are not");
            }
        ?>
    </div>
    </form>

<?php
require_once 'includes/footer.php'
?>
