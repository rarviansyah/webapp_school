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
  <title>Aplikasi Sekolah</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<body>

<div class="container col-md-4 mt-4">
        <h1 class="text-center">Login</h1>
        <?php if(isset($error)) : ?>
            <p style="color: red; font-style: italic; ">username / password salah!</p>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
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
    </div>
</body>
</html>