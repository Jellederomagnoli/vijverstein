<?php

require "./header.php"

?>

<div class="container">

<div class="loginblok">
    <img src="../img/avatar-png-3.jpg" alt="" class="avatar">
    <h1>Registration</h1>
    <form action="../includesphp/signup.inc.php" method="post">
        <p>Name</p>
        <input type="text" name="name" placeholder="Enter Name">
        <p>Email</p>
        <input type="text" name="mail" placeholder="Enter email">
        <p>Password</p>
        <input type="password" name="pwd" id="Enter Password" placeholder="Password">
        <p>Repeat Password</p>
        <input type="text" name="pwd-repeat" placeholder="repeat password"> 
        <input type="submit" name="signup-submit" value="Signup">
    </form>
</div>


</div>