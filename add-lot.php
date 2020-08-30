<?php
  require_once('functions.php');
  require_once('data.php');

  $ads_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

  $page_content = include_template('add-lot.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

  $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'ads_categories' => $ads_categories,
     'title' => 'Добавить лот',
     'is_auth' => $is_auth,
     'user_name' => $user_name,
     'user_avatar' => $user_avatar,
  ]);

  function check_add_form() {
    $required_fields = ['lot-name',]; // 'category', 'message', 'photo2', 'lot-rate', 'lot-step', 'lot-date'
    $errors = [];

    foreach ($required_fields as $field) {
      if (empty($_POST[$field])) {
        $errors[$field] = 'Поле не заполнено';
      }
    }

    if (count($errors)) {
      return false; // Поле не заполнено;

    } else {
      // ob_end_clean();
      // require_once('functions.php');
      // require_once('data.php');
      // $page_content = include_template('lot.php', []);
      //
      // $layout_content = include_template('layout.php', [
      //    'content' => $page_content,
      //    'ads_categories' => $ads_categories,
      //    'title' => 'Добавить лот',
      //    'is_auth' => $is_auth,
      //    'user_name' => $user_name,
      //    'user_avatar' => $user_avatar,
      // ]);
      //
      // print $layout_content;
      header("Location: /add-lot.php");
      return true; // Были заполнены все поля формы
    }
  }

  print($layout_content);

 // function check_add_form_format() {
 //   foreach ($POST as $key => $value) {
 //     if ($key == 'email') {
 //       if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
 //         $errors[$key] = 'Email должен быть корректным';
 //       }
 //     } else if ($key == 'ip') {
 //       if (!filter_var($value, FILTER_VALIDATE_IP)) {
 //         $errors[$key] = 'Ведите корректный IP адрес';
 //       }
 //     }
 //   }
 //   if (count($errors)) {
 //     // Показать ошибку валидаци;
 //   }
 // }
 //
 // check_add_form();

// $errors = [];
// foreach ($_POST as $key => $value) {
//   if ($key == "email") {
//     if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
//       $errors[$key] = 'Email должен быть корректным';
//     }
//   } else if ($key == "ip") {
//     if (!filter_var($value, FILTER_VALIDATE_IP)) {
//       $errors[$key] = 'Введите корректный IP адрес';
//     }
//   }
// }
//
// if (count($errors)) {
// // показать ошибку валидации
// }
