<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="sign-in.php" method="POST">
          <fieldset>
              <legend>
                  Sign-in
              </legend>
              <table>
                  <tr>
                      <td>User Name</td>
                      <td><input type="text" name="email" placeholder="Email"></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" placeholder="Password"></td>
                  </tr>
                  <tr>
                      <td colspan="2" class="align-items-center">
                          <input class="btn-success" type="submit" name="btn-submit" value="Sign-in">
                      </td>
                  </tr>
              </table>
          </fieldset>

      </form>

  </body>
</html>