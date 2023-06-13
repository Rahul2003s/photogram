
<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <!-- <link href="assets/dist/css/signup.css" rel="stylesheet"> -->

  <?php load_template("head");?>
  
  <body class="text-center">    
  
  <?php load_template("signup"); ?>
    <script>
       function check_pass() {
            if (document.getElementById('password').value ==
                    document.getElementById('c_password').value) {
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('submit').disabled = true;
            }
        }
      </script>
  </body>
</html>
