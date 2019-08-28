<?php
    session_start();
    if (!isset($_SESSION['uname'])) {
        header('Location: 404.php');
    } else {
        if (!isset($_POST['modify'])) {
            header('Location: 404.php');
        } else {
            echo '<!DOCTYPE html>
                    <html lang="en">
                        <head>
                        <meta charset="UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                        <script
                            src="https://code.jquery.com/jquery-3.4.1.min.js"
                            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                            crossorigin="anonymous"
                        ></script>
                        <link rel="stylesheet" href="../css/signup.css" />
                        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
                        <title>Signup</title>
                        </head>
                    <body>
                        <div class="card">
                            <img
                            src="../img/user.png"
                            width="100px"
                            height="100px"
                            class="user-img"
                            />';

            if (isset($_POST['modify']['update'])) {
                echo '<h2>Update details</h2>';
                echo '<form action="../includes/modifycheck.php" method="post" name="form">';
                echo '<div class="block">
                        <div class="input-wrap">
                            <input type="text" name="fname" value="'.$_SESSION['fname'].'" autofocus required />
                            <label for="fname" class="input-label">
                                <span class="label-content">First name</span>
                            </label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="lname" value="'.$_SESSION['lname'].'" required />
                            <label for="lname" class="input-label">
                                <span class="label-content">Last name</span>
                            </label>
                        </div>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="email" name="email" value="'.$_SESSION['email'].'" required />
                        <label for="email" class="input-label">
                        <span class="label-content">E-mail</span>
                        </label>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="text" name="uname" value="'.$_SESSION['uname'].'" required />
                        <label for="uname" class="input-label">
                        <span class="label-content">User name</span>
                        </label>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="date" name="dob" value="'.$_SESSION['dob'].'" required />
                        <label for="dob" class="input-label">
                        <span class="label-content"></span>
                        </label>
                    </div>';
                echo '<input type="submit" name="update-submit" value="Update" id="submit" />';
                echo '</form>';
            } elseif (isset($_POST['modify']['delete'])) {
                echo '<h2>Log in here</h2>';
                echo '<form action="../includes/modifycheck.php" method="post">';
                echo '<div class="input-wrap">
                        <input type="password" name="current-pwd" aria-label="current password" required />
                        <label for="password" class="input-label">
                        <span class="label-content">Password</span>
                        </label>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="password" name="new-pwd[0]" aria-label="password" required />
                        <label for="password" class="input-label">
                        <span class="label-content">Password</span>
                        </label>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="password" name="new-pwd[1]" aria-label="password" required />
                        <label for="password" class="input-label">
                        <span class="label-content">Password</span>
                        </label>
                    </div>';
                echo '<input type="submit" name="delete-submit" value="Delete" id="submit" />';
                echo '</form>';
            } else {
                echo 'Something stupid happen!!! Go back, Simon.';
            }
            echo '</div>';
            echo '<script src="../js/validation.js" defer></script>';
            echo '</body>';
            echo '</html>';
        }
    }
