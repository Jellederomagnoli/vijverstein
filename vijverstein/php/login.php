

<?php

require "./header.php"

?>

<div class="container">

<div class="loginblok">
    <img src="../img/avatar-png-3.jpg" alt="" class="avatar">
    <h1>Login Here</h1>
    <form action="../includesphp/login.inc.php" method='post'>
        <p>Email/Username</p>
        <input type="text" name="email" placeholder="Enter email">
        <p>Password</p>
        <input type="password" name="pwd" id="Enter Password" placeholder="Password">
        <input type="submit" name="login-knop" value="Login">
        <a href="#">Lost your password?</a><br>
        <a href="./signup.php">Don't have an account?</a>
    </form>
</div>
</div>

<?php

require "./footer.php"
?>