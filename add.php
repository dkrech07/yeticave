<?php
  require_once('data.php');
  require_once('functions.php');

  $auth_and_name= checkAuth();

  if ($auth_and_name[0]) {
    $errors = check_add_form();

    if (count($errors)) {
      $page_content = include_template('add.php', []);

      $layout_content = include_template('layout.php', [
         'content' => $page_content,
         'title' => 'Добавить объявление',
         'ads_categories' => $ads_categories,
         'is_auth' => $auth_and_name[0],
         'username' => $auth_and_name[1],
         'user_avatar' => $user_avatar,
        ]);
    } else {
    if (isset($_FILES['photo2']['name'])) {
      $file_name = $_FILES['photo2']['name'];
      $file_url = 'uploads/' . $file_name;
      move_uploaded_file($_FILES['photo2']['tmp_name'], $file_url);
    }

      array_push($ads_list, [
        'name' => $_POST['name'],
        'category' => $_POST['category'],
        'message' => $_POST['message'],
        'image_url' => $file_url,
        'price' => $_POST['lot-rate'],
        'lot-step' => $_POST['lot-step'],
        'lot_end_time' => $_POST['lot-date'],
      ]);

      $page_content = include_template('lot.php', ['ads_list' => $ads_list, 'id' => count($ads_list) - 1]);

      $layout_content = include_template('layout.php', [
        'content' => $page_content,
        'title' => $ads_list[count($ads_list) - 1]['name'],
        'ads_categories' => $ads_categories,
        'is_auth' => $auth_and_name[0],
        'username' => $auth_and_name[1],
        'user_avatar' => $user_avatar,
      ]);
    }

    print($layout_content);
  } else {
    header('HTTP/1.0 403 Forbidden');
    echo 'Нужно авторизоваться, чтобы добавить лот.';
  }
