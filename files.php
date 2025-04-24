<?php 
session_start();
// include_once 'header.php'; // Include header file for session management
include_once 'db.php'; // Include database connection file

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if (isset($_SESSION['id'])) {
    if ($_SESSION['id'] == 1) {
        echo "You are logged in!";
    }
    echo "<form action='logout.php'>
            <button type='submit' name='submitLogout'>Logout</button>
          </form>";
    } else {
        echo "You are not logged in!";
        echo "<form action='login.php'>
                <button type='submit' name='submitLogin'>Login</button>
              </form>";
    }
      
?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" required>
        <button type="submit" name="submit">upload</button>
    </form>

    <form action="login.php">
        <button type="submit" name="submitLogin">Login</button>
    </form>

    <form action="Logout.php">
        <button type="submit" name="submitLogout">Logout</button>
    </form>

</body>
</html>