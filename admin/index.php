<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="admin.css">
  <title>Админка</title>
</head>
<body>
    <div class="form-wrapper">
      <div class="form__inner">
        <form class="form__form" method="POST" data-tab="login" action="functions/auth.php">
          <div class="form__title">Вход в админку</div>
          <input type="text" placeholder="Логин" name="login" required>
          <input type="password" placeholder="Пароль" name="password" required>
          <?php if (isset($_SESSION['isAuth']) && $_SESSION['isAuth'] == false):?>
            <p>Неверно введен логин или пароль</p>
          <?php endif?>
          <button type="submit">Войти</button>
        </form>
      </div>
    </div>
</body>
</html>

<?php unset($_SESSION['isAuth'])?>