      <main>
        <div class="person-info">
          <?php
            if (!isset($_SESSION['uname'])) {
              echo 'Please&nbsp;<a href="html/login.html">logIn</a>&nbsp;to see you personal info.';
            } else {
              echo '<div class="attr">
                      <p>Name</p>
                      <p>Email</p>
                      <p>Username</p>
                      <p>Date of birth</p>
                      <p>Password</p>
                    </div>';
              echo '<div class="attr-values">
                      <p><span>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</span></p>
                      <p><span>'.$_SESSION['email'].'</span></p>
                      <p><span>'.$_SESSION['uname'].'</span></p>
                      <p><span>'.$_SESSION['dob'].'</span></p>
                      <p><span>**********</span></p>
                    </div>';
            }
          ?>
        </div>
        <?php
          if (!isset($_SESSION['uname'])) {
            echo '';
          } else {
            echo '<form action="modify.php" method="post" name="modify">
                    <input type="submit" value="Update details" name="update" />
                    <input type="submit" value="Delete account" name="delete" />
                  </form>';
          }
        ?>
      </main>