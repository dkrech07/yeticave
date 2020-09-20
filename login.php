<?php
  require_once('functions.php');
  require_once('data.php');
  require_once('userdata.php');

  $errors = check_login_form();

  if (count($errors)) {
    $page_content = include_template('login.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

    $layout_content = include_template('layout.php', [
       'content' => $page_content,
       'title' => 'Вход',
       'ads_categories' => $ads_categories,
       'is_auth' => $is_auth,
       'user_name' => $user_name,
       'user_avatar' => $user_avatar,
     ]);

    print($layout_content);
  } else {
    header('Location: index.php');
    exit();
  }
