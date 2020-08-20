<main class="container">
  <section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <li class="promo__item promo__item--boards">
            <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
        </li>
        <li class="promo__item promo__item--attachment">
            <a class="promo__link" href="all-lots.html">Крепления</a>
        </li>
        <li class="promo__item promo__item--boots">
            <a class="promo__link" href="all-lots.html">Ботинки</a>
        </li>
        <li class="promo__item promo__item--clothing">
            <a class="promo__link" href="all-lots.html">Одежда</a>
        </li>
        <li class="promo__item promo__item--tools">
            <a class="promo__link" href="all-lots.html">Инструменты</a>
        </li>
        <li class="promo__item promo__item--other">
            <a class="promo__link" href="all-lots.html">Разное</a>
        </li>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>

    <?php
      $get_price = function ($price) {
        return number_format(ceil($price), 0, '.', ' ') . ' &#x20bd';
      };
    ?>

    <ul class="lots__list">
      <?php foreach ($ads_list as $ads_number => $ads): ?>
        <li class="lots__item lot">
            <div class="lot__image">
                <img src="<?= $ads['image_url'] ?>" width="350" height="260" alt="<?= $ads['name'] ?>">
            </div>
            <div class="lot__info">
                <span class="lot__category"><?= $ads['category'] ?></span>
                <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?= $ads_number ?>"><?= $ads['name'] ?></a></h3>
                <?php
                if (isset($_GET['id'])) {
                  print($_GET['id']);
                }
                 ?>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost"><?= $get_price($ads['price']) ?></span>
                    </div>
                    <div class="lot__timer timer">
                      <?php $lot_time = get_lot_time($ads['lot_end_time']) ?>
                      <?= $lot_time[0] . ':' . $lot_time[1] ?>
                    </div>
                </div>
            </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</main>
