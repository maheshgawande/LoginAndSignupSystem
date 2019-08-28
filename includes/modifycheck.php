<?php
    if (!isset($_SESSION['uname'])) {
        header ('Location: ../index.php');
    } elseif (isset($_POST['update-submit'])) {
        echo 'Update check!';
    } elseif (isset($_POST['delete-submit'])) {
        echo 'Delete check!';
    } else {
        echo 'Something stupid happened!!! Go back, Simaon.';
    }