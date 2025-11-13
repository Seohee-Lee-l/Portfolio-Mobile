<div id='top_login'>

<?php
    if(!isset($_SESSION['userid']) || !$_SESSION['userid'])
    {
?>
    <a href="login_form.php">Login</a>
<?php
    }
    else
    {
?>
    <a href="logout.php" class='logout'>Logout</a>
<?php
    }
?>

</div>