<?php
    require_once('data.php');
    require_once('functions.php');

    // $viewed_lots = $_COOKIE;
    $lots_history = [];

    foreach ($_COOKIE as $viewed_lot_id => $viewed_lot_value) {
      print($viewed_lot_id);
      print($viewed_lot_value);
      $lots_history[$viewed_lot_id] = $ads_list[$viewed_lot_id];
      // array_push($lots_history, $ads_list[$viewed_lot_id]);
      // array_push($lots_history[$viewed_lot_id], ['id'] => $viewed_lot_id);
    }

    $page_content = include_template('history.php', ['ads_categories' => $ads_categories, 'lots_history' => $lots_history]);

    $layout_content = include_template('layout.php', [
       'content' => $page_content,
       'title' => 'История просмотров',
       'ads_categories' => $ads_categories,
       'is_auth' => $is_auth,
       'user_name' => $user_name,
       'user_avatar' => $user_avatar,
     ]);

    print($layout_content);


    // print_r($_COOKIE);
    // print_r($lots_history);
