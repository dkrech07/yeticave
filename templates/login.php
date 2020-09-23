<?php
  require_once('./functions.php');
  require_once('./userdata.php');
  require_once('./data.php');

  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $errors = check_login_form();
  $login_info = authentication_login_form($email, $password, $users);
?>

<main>
  <nav class="nav">
    <ul class="nav__list container">
      <li class="nav__item">
        <a href="all-lots.html">Доски и лыжи</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Крепления</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Ботинки</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Одежда</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Инструменты</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Разное</a>
      </li>
    </ul>
  </nav>
  <form class="form container <?= check_add_form_valid($errors); ?>" action="login.php" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
    <h2>Вход</h2>
    <div class="form__item <?= check_add_form_field($errors, 'email'); ?>"> <!-- form__item--invalid -->
      <label for="email">E-mail*</label>
      <input id="email" type="text" name="email" placeholder="Введите e-mail" value="<?= $email; ?>">
      <span class="form__error">Введите e-mail</span>
      <?= check_login_error($login_info, 'email'); ?>
    </div>
    <div class="form__item form__item--last <?= check_add_form_field($errors, 'password'); ?>">
      <label for="password">Пароль*</label>
      <input id="password" type="text" name="password" placeholder="Введите пароль" value="<?= $password; ?>">
      <span class="form__error">Введите пароль</span>
      <?= check_login_error($login_info, 'password'); ?>
    </div>
    <button type="submit" class="button">Войти</button>
  </form>
</main>
