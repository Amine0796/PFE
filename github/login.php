<?php
session_start();

// Check if user is already logged in
// if (isset($_SESSION["user"])) {
//    header("Location: chef-formation.php");
//    exit();
// }

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    require_once "database.php"; // Include database connection
    
    // Prepare SQL statement to prevent SQL injection
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT username, password, poste FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    
?>
    <!-- // Check if user exists -->
    <div class="commentlogin">
    <?php

    if ($result->num_rows == 0) {
        // echo "Password or username invalid";
        echo '<div class="error-message">Password or username invalid</div>';
        include('login.html');
        
        exit();
    }
    ?>
    </div>
    
<?php

    // Fetch user data
    $row = $result->fetch_assoc();
    $poste = $row["poste"];

    // Store user data in session
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    // Redirect based on user's position
    if ($poste == 'chef-formation') {
        header("Location: chef-formation.php");

        exit();
    } elseif ($poste == 'RS') {
        header("Location: RS.php");
        exit();
    }elseif ($poste == 'relex') {
        header("Location: relex.php");
    }
}
?>










<!-- //         require_once "database.php";

// // Error message variable (optional)
// $error_message = "";

// if (isset($_POST["username"]) && isset($_POST["password"])) {
//   $username = trim($_POST["username"]); // Trim whitespace from username
//   $password = $_POST["password"];
 
//   // Validate username (optional, implement your validation logic here)
//   // if (empty($username) || strlen($username) < 4) {
//   //   $error_message = "Username must be at least 4 characters long.";
//   // }

//   if (empty($error_message)) { // Proceed if no validation errors
//     $sql = "SELECT * FROM users WHERE username = ?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $username);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if ($result) {
//       $user = mysqli_fetch_assoc($result);
//       if ($user) {
//         // Verify password using password hashing
//         if ($username == $user["Username"] && $password == $user["Password"]) {
//           if ($user["Poste"] == "chef-formation") {
//             $_SESSION["user"] = "yes";
      
//           header("Location: chef-formation.php");
//           exit();
//           }
//           if ($user["Poste"] == "RS") {
//             $_SESSION["user"] = "yes";
//             $_SESSION["username"] = $username;
//           header("Location: RS.php");
//           exit();
//           }
//         } else {
//           $error_message = "Invalid username or password.";
//         }
//       } else {
//         $error_message = "Invalid username or password.";
//       }
//     } else {
//       $error_message = "Database error: " . mysqli_error($conn);
//     }

//     mysqli_stmt_close($stmt);
//   }
// } -->
<!-- /*?>*/  -->