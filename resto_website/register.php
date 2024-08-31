<?php
include('includes/db.php');
$pesan = "";

session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try{
    $sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $pesan = "Registration successful!";
        header("Location: login.php");
    } else {
        $pesan = "Error: " . $sql . "<br>" . $conn->error;
    }

}catch(mysqli_sql_exception){
    $pesan = "The email is already there, bro";
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
    <title>Register</title>
</head>
<body>
<?= include 'includes/header.php' ?>
    <div class="container-fluid header">
    <div class="form-container">
        <h2>register</h2>
        <form action="register.php" method="post">
            <div class="#">
                <label for="username" class="form-label mb-4">Username:</label>
                <input type="text" class="form-control" name="username" name="username" required>
            </div>
            <div class="#">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" name="password" required>
            </div>
            <div class="#">
                <label for="email" class="form-label">email:</label>
                <input type="email" class="form-control" name="email" name="password" required>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexCheckChecked"> Register Here</label>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
        </form>
    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
