<?php
  require_once('functions.php');
  require_once('data.php');

  $auth_and_name= checkAuth();

  date_default_timezone_set('Europe/Moscow');

  $page_content = include_template('index.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

  $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'title' => 'Главная',
     'ads_categories' => $ads_categories,
     'is_auth' => $auth_and_name[0],
     'username' => $auth_and_name[1],
     'user_avatar' => $user_avatar,
   ]);

  print($layout_content);
