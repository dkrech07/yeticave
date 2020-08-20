<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$is_auth = (bool) rand(0, 1);
$user_name = 'Дмитрий';
$user_avatar = 'img/user.jpg';

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
