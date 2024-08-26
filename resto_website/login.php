<?php
include('includes/db.php');


session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: home.html");
        } else {
            echo "password is incorrect ";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<?= include 'includes/header.php' ?>
    <div class="container-fluid header">
    <div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="#">
                <label for="username" class="form-label mb-4">Username:</label>
                <input type="text" class="form-control" name="username" name="username" required>
            </div>
            <div class="#">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" name="password" required>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexCheckChecked"> Login Here</label>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
