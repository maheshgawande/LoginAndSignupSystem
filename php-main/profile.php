    <?php
        require 'header.php';
    ?>

    <div>
        <?php
            if (isset($_SESSION['uname'])) {
                echo '<div style="margin:100px;">You are loged in!</div>';
            } else {
                echo '<div style="margin:100px;">You are loged out!</div>';
            }

        ?>
    </div>
</body>
</html>