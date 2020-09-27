<?php
  require_once('functions.php');
  require_once('data.php');

  $auth_and_name= checkAuth();
  $id = $_GET['id'];

  foreach ($ads_list as $ads_number => $ads) {
    if (isset($id) && is_numeric($id) && $id == $ads_number) {
      $page_content = include_template('lot.php', ['ads_list' => $ads_list, 'id' => $id, 'is_auth' => $auth_and_name[0]]);

      $layout_content = include_template('layout.php', [
        'content' => $page_content,
        'title' => $ads_list[$id]['name'],
        'ads_categories' => $ads_categories,
        'is_auth' => $auth_and_name[0],
        'username' => $auth_and_name[1],
        'user_avatar' => $user_avatar,
      ]);

      print($layout_content);

    }
  }

  print('PAGE 404');
