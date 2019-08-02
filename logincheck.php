<?php

if (isset($_POST['login-submit'])) {
    require_once 'config.php';

    $emailUname = $_POST['emailUname'];
    $sql = 'SELECT uname, email, pwd FROM users WHERE uname=? OR email=?;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: login.html?error=sqlerror1');    //SQL-Error -- 1
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 'ss', $emailUname, $emailUname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            header('Location: login.html?error=nouser');    //Error -- User not available
            exit();
        } else {
            $dbpass = $row['pwd'];
            $pwdCheck = password_verify($pwd, $dbpass);

            if ($pwdCheck == false) {
                header('Location: login.html?error=wrongpassword2');      //Error -- Wrong Password2
                exit();
            } else if ($pwdCheck == true) {
                header('Location: profile.php?login=success');      //Login -- Success
                exit();
            } else {
                header('Location: login.html?error=wrongpassword3');      //Error -- Wrong Password3
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: login.html');
    exit();
}