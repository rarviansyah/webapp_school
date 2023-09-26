<?php
if(isset($_POST['submit'])){
    if($_POST['username'] == 'admin' && $_POST['password'] == '1234'){
        header('Location: dashboard.php');
        exit;
    }else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Sekolah - Login</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <style>
    body {
      background-image: url('depanwk.png'); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.8); /* Menambahkan lapisan transparan pada kotak login */
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    .login-container h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .btn-primary {
      width: 100%;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .error-message {
      color: red;
      font-style: italic;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-container">
    <h1>Login</h1>
    <?php if(isset($error)) : ?>
      <p class="error-message">Username / Password salah!</p>
    <?php endif; ?>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>
  </div>
</div>

</body>
</html>
