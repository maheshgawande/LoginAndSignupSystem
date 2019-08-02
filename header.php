<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .header {
            width: 100vw;
            height: 50px;
            background-color: black;
            position: relative;
        }
        .button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translate(-10px, -50%);
            border: solid red 2px;
            width: 100px;
            height: 30px;
            background-color: black;
            color: white;
            cursor: pointer;
        }
    </style>
    <title></title>
</head>
<body>
    <div class="header">
        <form action="logout.php" method="post">
            <?php
                if (isset($_SESSION['uname'])) {
                    echo '<input class="button" type="submit" name="logout-submit" value="Logout">';
                } else {
                    // echo '<input class="button" type="button" name="logout-submit" value="Login">';
                    header('Location: login.html');
                }
            ?>
        </form>
    </div>