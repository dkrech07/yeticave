<?php
  require_once('functions.php');
  require_once('data.php');
  require_once('userdata.php');

  $errors = check_login_form();

    $page_content = include_template('login.php', ['users' => $users]);

    $layout_content = include_template('layout.php', [
       'content' => $page_content,
       'title' => 'Вход',
       'ads_categories' => $ads_categories,
       'is_auth' => $is_auth,
     ]);

    print($layout_content);
