<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include 'database.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select users.email , users.password from users where users.email='$email' and users.password='$password'";
    $x = mysqli_query($conn,$sql);
    $a = mysqli_num_rows($x);
    if ($a==1) {
      echo "Login success";
    } else {
      echo "Login failed";
    }

    
    ?>
  </body>
</html>