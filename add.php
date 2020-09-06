<?php
  require_once('data.php');
  require_once('functions.php');

  check_add_form($ads_list);

  $page_content = include_template('add.php', []);

  $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'title' => 'Добавить объявление',
     'ads_categories' => $ads_categories,
     'is_auth' => $is_auth,
     'user_name' => $user_name,
     'user_avatar' => $user_avatar,
    ]);

    print($layout_content);
