<?php
  require_once('functions.php');
  require_once('data.php');

date_default_timezone_set('Europe/Moscow');

 $ads_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

 $page_content = include_template('index.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

 $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'ads_categories' => $ads_categories,
     'title' => 'Главная',
     'is_auth' => $is_auth,
     'user_name' => $user_name,
     'user_avatar' => $user_avatar,
 ]);



 print($layout_content);
