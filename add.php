<?php
  require_once('data.php');
  require_once('functions.php');

    $errors = check_add_form();

    if (count($errors)) {
      $page_content = include_template('add.php', []);

      $layout_content = include_template('layout.php', [
         'content' => $page_content,
         'title' => 'Добавить объявление',
         'ads_categories' => $ads_categories,
         'is_auth' => $is_auth,
         'user_name' => $user_name,
         'user_avatar' => $user_avatar,
        ]);
    } else {


    if (isset($_FILES['avatar']['name'])) {
        $path = $_FILES['avatar']['name'];
        $res = move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . $path);
    }


      array_push($ads_list, [
        'name' => $_POST['lot-name'],
        'category' => $_POST['category'],
        'message' => $_POST['message'],
        'image_url' => $path,
        'price' => $_POST['lot-rate'],
        'lot-step' => $_POST['lot-step'],
        'lot_end_time' => $_POST['lot-date'],
      ]);

      $page_content = include_template('lot.php', ['ads_list' => $ads_list, 'id' => count($ads_list) - 1]);

      $layout_content = include_template('layout.php', [
        'content' => $page_content,
        // 'title' => $ads_list[$id]['name'],
        'ads_categories' => $ads_categories,
        'is_auth' => $is_auth,
        'user_name' => $user_name,
        'user_avatar' => $user_avatar,
      ]);
    }

    print($layout_content);
    print_r($_FILES);
