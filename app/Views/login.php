<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
  body {
    background-color: #fff;
    color: #000; 
    font-family: 'Arial', sans-serif; 
  }

  .login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .form-wrapper {
    background-color: #ddd;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    font-family: 'Arial', sans-serif; 
    font-weight: bold; 
    width: 500px; 
  }

  .btn-primary {
    background-color: #555;
    border-color: #555;
    color: #fff; 
  }

  .btn-primary:hover {
    background-color: #777;
    border-color: #777;
  }

  .text-primary {
    color: #000; 
    font-family: 'Arial', sans-serif; 
    font-weight: bold; 
  }

  .text-center {
    text-align: center;
  }
</style>
</head>
<body>
  <div class="login-container">
    <div class="form-wrapper">
      <h3 class='text-center text-primary'>Log in to your Account</h3>
      <hr>
      <?php
      if (session()->get('success')): ?>
        <div class="alert alert-success" role=alert>
          <?= session()->get('success') ?>
        </div>
      <?php endif; ?>
      <form method="POST" action="/">
        <div class="form-group">
          <label for="email" class="text-primary">Email:</label>
          <input type="text" class="form-control" name="email" id="email" value="">
        </div>
        <div class="form-group">
          <label for="password" class="text-primary">Password:</label>
          <input type="password" class="form-control" name="password" id="password" value="">
        </div>
        <?php if (isset($validation)): ?>
          <div class="col-12">
            <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
          <div class="col-12 col-sm-8 text-right">
            <a href="/register" class="text-primary">No account? Sign up here</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
