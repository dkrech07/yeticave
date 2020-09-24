<?php
  require_once('functions.php');
  require_once('data.php');

  session_start();
  print_r($_SESSION['name']);

  if ($_SESSION['user']['name']) {
      $is_auth = 1;
      $username = $_SESSION['user']['name'];
  } else {
      $is_auth = 0;
      $username = 'Неопознанный пользователь';
  }

  date_default_timezone_set('Europe/Moscow');

  $page_content = include_template('index.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

  $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'title' => 'Главная',
     'ads_categories' => $ads_categories,
     'is_auth' => $is_auth,
     'username' => $username,
     'user_avatar' => $user_avatar,
   ]);

  print($layout_content);
