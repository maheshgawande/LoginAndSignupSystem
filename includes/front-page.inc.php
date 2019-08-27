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
              echo '<div class="attr-values-change">
                      <p><a href="#">edit</a></p>
                      <p><a href="#">update</a></p>
                      <p><a href="#">change</a></p>
                      <p><a href="#">upadte</a></p>
                      <p><a href="#">reset</a></p>
                    </div>';
            }
          ?>
        </div>
      </main>