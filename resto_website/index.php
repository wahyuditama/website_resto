<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Guest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .bg-container{
        background-image: url('img/bg.img.jpg');
    }
    .btn-primary {
    width: 20%;
    padding: 10px;
    font-size: 16px;
}
</style>
<body>
    <?= include 'includes/header.php' ?>
    <div class="bg-container">
    <form action="register.php" class="w-50 text-center" method="get">
        <button class="btn btn-login" type="text" href="login.php">Lanjut Register</button>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
