<?php
require_once('functions.php');
require_once('data.php');

function get_lot_page($id, $ads_list) {
  foreach ($ads_list as $ads_number => $ads) {
    if (isset($id) && is_numeric($id) && $id == $ads_number) {
      $page_content = include_template('lot.php', ['ads_list' => $ads_list, 'id' => $id]);

      $layout_content = include_template('layout.php', [
        'content' => $page_content,
        'title' => $ads_list[$id]['name'],
      ]);

      print($layout_content);
      return;
    }
  }

  print('404');
}

get_lot_page($_GET['id'], $ads_list);
