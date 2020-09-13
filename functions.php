<?php

function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function get_lot_time($lot_end_time) {
  $one_minute = 60;
  $one_hour = 3600;

  $end_time_lot = strtotime($lot_end_time);
  $current_time = time();

  $time_different = $end_time_lot - $current_time;
  $hours_time_lot = floor($time_different / $one_hour);

  if ($hours_time_lot < 10) {
    $hours_time_lot = str_pad($hours_time_lot, 2, "0", STR_PAD_LEFT);
  }
  $minutes_time_lot = floor(($time_different % $one_hour) / $one_minute);

  return [$hours_time_lot, $minutes_time_lot];
};

function check_add_form() {
    $required_fields = ['name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date'];
    $errors = [];

    foreach ($required_fields as $field) {
      if (empty($_POST[$field])) {
        $errors[$field] = 'Поле не заполнено';
      } else if (!is_numeric($_POST['lot-rate']) || !is_numeric($_POST['lot-step'])) {
        $errors['lot-step'] = 'Укажите числовые данные';
      } 
      // else if ($_POST['lot-date'] <= strtotime("+1 day")) {
      //   $errors['lot-date'] = 'Укажите дату позднее сегодняшнего дня';
      // }
    }

    return $errors;
};
