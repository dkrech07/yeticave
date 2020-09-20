<?php
    require_once('data.php');
    require_once('functions.php');
    // require_once('templates/layout.php');
    // require_once('templates/history.php');

    $viewed_lots = $_COOKIE;
    $lots_history = [];

    foreach ($viewed_lots as $viewed_lot_id => $value) {
        array_push($lots_history, $ads_list[$viewed_lot_id]);
    }

    $page_content = include_template('history.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

    $layout_content = include_template('layout.php', [
       'content' => $page_content,
       'title' => 'История просмотров',
       'ads_categories' => $ads_categories,
       'is_auth' => $is_auth,
       'user_name' => $user_name,
       'user_avatar' => $user_avatar,
     ]);

    print($layout_content);

    // $page_content = include_template('lot.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

    // $layout_content = include_template('layout.php', [
    //    'content' => $page_content,
    //    'title' => 'Главная',
    //    'ads_categories' => $ads_categories,
    //    'is_auth' => $is_auth,
    //    'user_name' => $user_name,
    //    'user_avatar' => $user_avatar,
    //  ]);
    //
    // print($layout_content);
    //
    //
    //
    // print_r($viewed_lots);
    // print_r($lots_history);
 ?>
