<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
      <h3 class='text-center text-primary'>Register</h3>
      <hr>
      <?php if (isset($validation)): ?>
        <div class="col-12">
          <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
          </div>
        </div>
      <?php endif; ?>
      <form method="POST" action="/register">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="name" class="text-primary">Name:</label>
              <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name') ?>">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="email" class="text-primary">Email:</label>
              <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password" class="text-primary">Password:</label>
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password_confirm" class="text-primary">Confirm Password:</label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary" style="background-color: #17a2b8;">Register</button>
          </div>
          <div class="col-12 col-sm-8 text-right">
            <a href="/" class="text-primary">Already have an Account? Sign In</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
