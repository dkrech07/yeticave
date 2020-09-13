<?php
  require_once('data.php');

  $lot_name = $_POST['name'] ?? '';
  // $category = $_POST['category'] ?? '';
  // $message = $_POST['message'] ?? '';
  // $photo2 = $_POST['photo2'] ?? '';
  // $lot-rate = $_POST['lot-rate'] ?? '';
  // $lot-step = $_POST['lot-step'] ?? '';
  // $lot_date = $_POST['lot-date'] ?? '';

  function check_valid ($ads_list) {
    if (!check_add_form($ads_list) && $_SERVER['REQUEST_METHOD'] === 'POST') {
      return 'form--invalid';
    }
  };
?>
