<?php
  require_once('functions.php');
  require_once('data.php');

  // print (get_template(`index.php`));

 $ads_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

 $ads_list = [
   [
     'name' => '2014 Rossignol District Snowboard',
     'category' => 'Доски и лыжи',
     'price' => '10999',
     'image_url' => 'img/lot-1.jpg'
   ],
   [
     'name' => 'DC Ply Mens 2016/2017 Snowboard',
     'category' => 'Доски и лыжи',
     'price' => '159999',
     'image_url' => 'img/lot-2.jpg'
   ],
   [
     'name' => 'Крепление Union Contact Pro 2015 года размер L/XL',
     'category' => 'Крепления',
     'price' => '8000',
     'image_url' => 'img/lot-3.jpg'
   ],
   [
     'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
     'category' => 'Ботинки',
     'price' => '10999',
     'image_url' => 'img/lot-4.jpg'
   ],
   [
     'name' => 'Куртка для сноуборда DC Mutiny Charocal',
     'category' => 'Доски и лыжи',
     'price' => '7500',
     'image_url' => 'img/lot-5.jpg'
   ],
   [
     'name' => 'Маска Oakley Canopy',
     'category' => 'Разное',
     'price' => '5400',
     'image_url' => 'img/lot-6.jpg'
   ]
 ];

 $is_auth = (bool) rand(0, 1);

 $page_content = include_template('index.php', ['ads_categories' => $ads_categories, 'ads_list' => $ads_list]);

 $layout_content = include_template('layout.php', [
     'content' => $page_content,
     'ads_categories' => $ads_categories,
     'title' => 'Главная',
     'is_auth' => $is_auth,
     // 'user_name' => $user_name
 ]);

 print($layout_content);
