<?php
  require_once('functions.php');
  require_once('data.php');

  $id = $_GET['id'];

  foreach ($ads_list as $ads_number => $ads) {
    if (isset($id) && is_numeric($id) && $id == $ads_number) {
      $page_content = include_template('lot.php', ['ads_list' => $ads_list, 'id' => $id]);

      $layout_content = include_template('layout.php', [
        'content' => $page_content,
        'title' => $ads_list[$id]['name'],
        'ads_categories' => $ads_categories,
        'is_auth' => $is_auth,
        'user_name' => $user_name,
        'user_avatar' => $user_avatar,
      ]);

      print($layout_content);

      $name = 'visitcount';
      $value = 1;
      $expire = strtotime($date);
      $path = '/';
      setcookie($name, $value, $expire, $path);

      return;
    }
  }

  print('PAGE 404');
