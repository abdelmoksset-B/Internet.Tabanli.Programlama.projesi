<?php
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];

$activeForm = $_SESSION['active_form'] ?? 'login';
session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="sign.css">
</head>
<body>

<div class="container">

  <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
    <form action="login_register.php" method="post">
      <h2>Login</h2>

      <?= showError($errors['login']); ?>

      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <button type="submit" name="login">Login</button>

      <p>Don't have an account?
        <a href="#" onclick="showForm('register-form')">Register</a>
      </p>
    </form>
    <p class="return-link">
      <a href="index.php">Return to main page?</a>
    </p>
  </div>

  <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
    <form action="login_register.php" method="post">
      <h2>Register</h2>

      <?= showError($errors['register']); ?>

      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="text" name="last_name" placeholder="Last Name" required>
      <input type="tel" name="phone_number" placeholder="Phone Number" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <button type="submit" name="register">Register</button>

      <p>Already have an account?
        <a href="#" onclick="showForm('login-form')">Login</a>
      </p>
    </form>
    <p class="return-link">
      <a href="index.php">Return to main page?</a>
    </p>
  </div>

</div>

<script src="script.js"></script>
</body>
</html>
