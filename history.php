<?php
    require_once('data.php');
    require_once('functions.php');

    $auth_and_name= checkAuth();
    $lots_history = [];

    foreach ($_COOKIE as $viewed_lot_id => $viewed_lot_value) {
        if (is_numeric($viewed_lot_value)) {
            $lots_history[$viewed_lot_id] = $ads_list[$viewed_lot_id];
        }
    }

    $page_content = include_template('history.php', ['ads_categories' => $ads_categories, 'lots_history' => $lots_history]);

    $layout_content = include_template('layout.php', [
       'content' => $page_content,
       'title' => 'История просмотров',
       'ads_categories' => $ads_categories,
       'is_auth' => $auth_and_name[0],
       'username' => $auth_and_name[1],
       'user_avatar' => $user_avatar,
     ]);

    print($layout_content);
