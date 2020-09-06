<?php
  require_once('functions.php');
  require_once('data.php');

  date_default_timezone_set('Europe/Moscow');

  $page_content = include_template('index.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

  $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'title' => 'Главная',
     'ads_categories' => $ads_categories,
     'is_auth' => $is_auth,
     'user_name' => $user_name,
     'user_avatar' => $user_avatar,
   ]);

  print($layout_content);
