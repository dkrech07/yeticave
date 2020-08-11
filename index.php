<?php
  require_once('functions.php');
  require_once('data.php');

date_default_timezone_set('Europe/Moscow');

 $ads_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

function get_next_day() {
  $next_day = strtotime("+1 day");
  return date("d-m-Y", $next_day);
};

 $ads_list = [
   [
     'name' => '2014 Rossignol District Snowboard',
     'category' => 'Доски и лыжи',
     'price' => '10999',
     'image_url' => 'img/lot-1.jpg',
     'lot_end_time' => get_next_day(),
   ],
   [
     'name' => 'DC Ply Mens 2016/2017 Snowboard',
     'category' => 'Доски и лыжи',
     'price' => '159999',
     'image_url' => 'img/lot-2.jpg',
     'lot_end_time' => get_next_day(),
   ],
   [
     'name' => 'Крепление Union Contact Pro 2015 года размер L/XL',
     'category' => 'Крепления',
     'price' => '8000',
     'image_url' => 'img/lot-3.jpg',
     'lot_end_time' => get_next_day(),
   ],
   [
     'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
     'category' => 'Ботинки',
     'price' => '10999',
     'image_url' => 'img/lot-4.jpg',
     'lot_end_time' => get_next_day(),
   ],
   [
     'name' => 'Куртка для сноуборда DC Mutiny Charocal',
     'category' => 'Доски и лыжи',
     'price' => '7500',
     'image_url' => 'img/lot-5.jpg',
     'lot_end_time' => get_next_day(),
   ],
   [
     'name' => 'Маска Oakley Canopy',
     'category' => 'Разное',
     'price' => '5400',
     'image_url' => 'img/lot-6.jpg',
     'lot_end_time' => get_next_day(),
   ]
 ];

 $is_auth = (bool) rand(0, 1);
 $user_name = 'Дмитрий';
 $user_avatar = 'img/user.jpg';

 $page_content = include_template('index.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

 $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'ads_categories' => $ads_categories,
     'title' => 'Главная',
     'is_auth' => $is_auth,
     'user_name' => $user_name,
     'user_avatar' => $user_avatar,
 ]);

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

 print($layout_content);
