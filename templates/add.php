<?php
require_once('functions.php');
require_once('add.php');

    $lot_name = $_POST['lot-name'] ?? '';
    $category = $_POST['category'] ?? '';
    $message = $_POST['message'] ?? '';
    $message = $_POST['lot-rate'] ?? '';
    $message = $_POST['lot-step'] ?? '';
    $message = $_POST['lot-date'] ?? '';

  $errors = check_add_form();
    print_r($errors['lot-name']);
  function check_add_form_fields($field) {
    if ($errors[$field]) {
        return 'form__item--invalid';
    }
  };

  function check_add_form_valid($errors) {
      if (count($errors) > 0) {
          return 'form--invalid';
      }
  };

 ?>

<main>
  <nav class="nav">
    <ul class="nav__list container">
      <li class="nav__item">
        <a href="all-lots.html">Доски и лыжи</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Крепления</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Ботинки</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Одежда</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Инструменты</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Разное</a>
      </li>
    </ul>
  </nav>
  <form class="form form--add-lot container <?= check_add_form_valid($errors); ?>" action="add.php" method="post"> <!-- form--invalid -->
    <h2>Добавление лота</h2>
    <div class="form__container-two">
      <div class="form__item <?= check_add_form_fields('lot-name'); ?>"> <!-- form__item--invalid -->
        <label for="lot-name">Наименование</label>
        <input id="lot-name" type="text" name="lot-name" value="<?= $lot_name ?>" placeholder="Введите наименование лота">
        <span class="form__error">Введите наименование лота</span>
      </div>
      <div class="form__item <?= check_add_form_fields('category'); ?>">
        <label for="category">Категория</label>
        <select id="category" name="category" required>
          <option>Выберите категорию</option>
          <option>Доски и лыжи</option>
          <option>Крепления</option>
          <option>Ботинки</option>
          <option>Одежда</option>
          <option>Инструменты</option>
          <option>Разное</option>
        </select>
        <span class="form__error">Выберите категорию</span>
      </div>
    </div>
    <div class="form__item form__item--wide <?= check_add_form_fields('message'); ?>">
      <label for="message">Описание</label>
      <textarea id="message" name="message" value="<?= $message ?>" placeholder="Напишите описание лота"></textarea>
      <span class="form__error">Напишите описание лота</span>
    </div>
    <div class="form__item form__item--file"> <!-- form__item--uploaded -->
      <label>Изображение</label>
      <div class="preview">
        <button class="preview__remove" type="button">x</button>
        <div class="preview__img">
          <img src="img/avatar.jpg" width="113" height="113" alt="Изображение лота">
        </div>
      </div>
      <div class="form__input-file">
        <input class="visually-hidden" type="file" id="photo2" value="">
        <label for="photo2">
          <span>+ Добавить</span>
        </label>
      </div>
    </div>
    <div class="form__container-three">
      <div class="form__item form__item--small <?= check_add_form_fields('lot-rate'); ?>">
        <label for="lot-rate">Начальная цена</label>
        <input id="lot-rate" type="number" name="lot-rate" placeholder="0">
        <span class="form__error">Введите начальную цену</span>
      </div>
      <div class="form__item form__item--small <?= check_add_form_fields('lot-step'); ?>">
        <label for="lot-step">Шаг ставки</label>
        <input id="lot-step" type="number" name="lot-step" placeholder="0">
        <span class="form__error">Введите шаг ставки</span>
      </div>
      <div class="form__item <?= check_add_form_fields('lot-date'); ?>">
        <label for="lot-date">Дата окончания торгов</label>
        <input class="form__input-date" id="lot-date" type="date" name="lot-date">
        <span class="form__error">Введите дату завершения торгов</span>
      </div>
    </div>
    <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button">Добавить лот</button>
  </form>
</main>
