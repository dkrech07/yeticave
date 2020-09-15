<?php

    $counter_id = $id;
    $counter_value = 1;
    $expire = strtotime("+30 days");
    $path = 'localhost/';

    if (isset($_COOKIE[$counter_id])) {
        $counter_value = $_COOKIE[$counter_id];
        $counter_value++;
    }

    setcookie($counter_id, $counter_value, $expire, $path);

    $lot_history = [];

    array_push($lot_history, $counter_value); // Здесь нужно будет задать id элемента;

    print($counter_id . ' ');
    print($counter_value);
    print_r($lot_history);
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
  <section class="lot-item container">
    <h2><?= $ads_list[$id]['name'] ?></h2>
    <div class="lot-item__content">
      <div class="lot-item__left">
        <div class="lot-item__image">
          <img src="<?= $ads_list[$id]['image_url']; ?>" width="730" height="548" alt="<?= $ads_list[$id]['name'] ?>">
        </div>
        <p class="lot-item__category">Категория: <span><?= $ads_list[$id]['category'] ?></span></p>
        <p class="lot-item__description"><?= $ads_list[$id]['message']; ?></p>
      </div>
      <div class="lot-item__right">
        <div class="lot-item__state">
          <div class="lot-item__timer timer">
            <?php $lot_time = get_lot_time($ads_list[$id]['lot_end_time']) ?>
            <?= $lot_time[0] . ':' . $lot_time[1] ?>
          </div>
          <div class="lot-item__cost-state">
            <div class="lot-item__rate">
              <span class="lot-item__amount">Текущая цена</span>
              <span class="lot-item__cost"><?= $ads_list[$id]['price'] ?></span>
            </div>
            <div class="lot-item__min-cost">
              Мин. ставка <span><?= $ads_list[$id]['lot-step'] ?> р</span>
            </div>
          </div>
          <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post">
            <p class="lot-item__form-item">
              <label for="cost">Ваша ставка</label>
              <input id="cost" type="number" name="cost" placeholder="12 000">
            </p>
            <button type="submit" class="button">Сделать ставку</button>
          </form>
        </div>
        <div class="history">
          <h3>История ставок (<span>10</span>)</h3>
          <table class="history__list">
            <tr class="history__item">
              <td class="history__name">Иван</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">5 минут назад</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Константин</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">20 минут назад</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Евгений</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">Час назад</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Игорь</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 08:21</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Енакентий</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 13:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Семён</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 12:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Илья</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 10:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Енакентий</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 13:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Семён</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 12:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Илья</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 10:20</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>
