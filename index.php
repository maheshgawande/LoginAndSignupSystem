<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '';
    } else {
        require_once 'config.php';
        $sql = 'SELECT * FROM users WHERE id=?';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: index.php?error=sqlerror');
            return;
        } else {
            mysqli_stmt_bind_param($stmt, 's', $_SESSION['id']);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                header('Location: index.php?error=nouser');
            } else {
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $uname = $row['uname'];
                $dob = $row['dob'];
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>

<?php
    require 'includes/header.inc.php';
?>

<?php
    require 'includes/front-page.inc.php';
?>

<?php
    require 'includes/footer.inc.php';
?>