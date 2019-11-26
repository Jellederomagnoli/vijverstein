<?php 

if (isset($_POST['signup-submit'])) {
    require "./dbh.inc.php";
   
    // Fetch data user

    $username = $_POST['name'];    
    $email = $_POST['mail'];    
    $password = $_POST['pwd'];    
    $passwordRepeat = $_POST['pwd-repeat'];
    
    // ophalen en checken op errors

    if (empty($username ) || empty($email ) || empty($password ) || empty($passwordRepeat )) {
        header("Location: ../php/signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }

    // username en email check
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("Location: ../php/signup.php?=invalidemailuid");
        exit();
    }


    // email check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../php/signup.php?error=invalidemail&uid=".$username);
        exit();
    }

    // Username check
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("Location: ../php/signup.php?error=invalideuid&mail=".$email);
        exit();
    }

    else if ($password !== $passwordRepeat) {
        header("Location: ../php/signup.php?error=passwordcheck&mail=".$email."&uid=".$username);
        exit();
    }

    // error als de username al bestaat in DB
    else {

       $sql = "SELECT username FROM users WHERE username=?";
       $stmt = mysqli_stmt_init($conn);  // prepared statement

       if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../php/signup.php?error=sqlerror");
        exit();
       }

       else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if ($resultCheck > 0) {
            header("Location: ../php/signup.php?error=UserTaken&mail=".$email);
            exit();
        }
        
        else {

    // store data in database
       $sql = 'INSERT INTO users (username ,emailUsers , pwdUsers) VALUES (?,?,?)';
       $stmt = mysqli_stmt_init($conn);  // prepared statement

       if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../php/signup.php?error=sqlerror");
        exit();
       }

       else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username,$email,$hashedPwd);
        mysqli_stmt_execute($stmt); 
        header("Location: ../php/login.php?Signup=Succes");
        exit();
       }

        }
       }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);




}

else {
    header("Location: ../signup.php?");
        exit();
}