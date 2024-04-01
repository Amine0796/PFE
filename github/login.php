<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: chef-formation.php");
   exit();
}
?>

<?php
// login.php
session_start();

// Définir la variable de session
$_SESSION['username'] = $user["Username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Loginn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="box">
        <div class="header">
            <header><img src="../images/sonatrach-logo-vector.svg" alt="sonatrach logo"></header>
        </div>
        <?php
        require_once "database.php";

// Error message variable (optional)
$error_message = "";

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = trim($_POST["username"]); // Trim whitespace from username
  $password = $_POST["password"];

  // Validate username (optional, implement your validation logic here)
  // if (empty($username) || strlen($username) < 4) {
  //   $error_message = "Username must be at least 4 characters long.";
  // }

  if (empty($error_message)) { // Proceed if no validation errors
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
      $user = mysqli_fetch_assoc($result);
      if ($user) {
        // Verify password using password hashing
        if ($username == $user["Username"] && $password == $user["Password"]) {
          if ($user["Poste"] == "chef-formation") {
            $_SESSION["user"] = "yes";

          header("Location: chef-formation.php");
          exit();
          }
          if ($user["Poste"] == "RS") {
            $_SESSION["user"] = "yes";

          header("Location: RS.php");
          exit();
          }
        } else {
          $error_message = "Invalid username or password.";
        }
      } else {
        $error_message = "Invalid username or password.";
      }
    } else {
      $error_message = "Database error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
  }
}
?>


        <form id="login-form" action="login.php" method="POST">
            <div class="input-box">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="input-field"  name="username" placeholder="Nom d'utilisateur" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <label for="pwd">Mot de passe</label>
                <input type="password" class="input-field"  name="password" placeholder="Mot de passe" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="showpass">
                <input type="checkbox" id="showpwd">
                <label for="showpwd">Afficher le mot de passe</label>
            </div>
            <div class="input-box">
                <input type="submit" class="input-submit" value="Se connecter" name="se-connecter">
            </div>
        </form>
    </div>
    
    <div class="wrapper"></div>
</div>

</body>
</html>






