<? snippet("layout-top") ?>

<header class="p-grid p-section">
  <div class="p-grid__item u-1/4">
    <h1>
      <?= $page_title ?>
    </h1>

    <time datetime="<?= $site->date("Y-m-d", "event_start_date") ?>">
      <?= $site->date("F j", "event_start_date") ?>
    </time>
    <span>&ndash;</span>
    <time datetime="<?= $site->date("Y-m-d", "event_end_date") ?>">
      <?= $site->date("j, Y", "event_end_date") ?>
    </time>

    <br>

    <span><?= $site->event_location() ?></span>
  </div>

  <div class="p-grid__item u-3/4">
    <? if($photo = $page->hero_photo()->toFile()): ?>
      <img src="<?= $photo->url() ?>"
           alt="">
    <? endif ?>
  </div>
</header>

<section class="p-section">
  <?= $pages->find("about")->story()->kirbytext() ?>
</section>

<section class="p-section">
  <h2>
    Featuring Performances By
  </h2>

  <ul class="p-grid u-list-bare">
    <? foreach($featured_performances as $featured_performance): ?>
      <li class="p-grid__item u-1/2">
        <a href="<?= $featured_performance->url() ?>">
          <img src="http://fillmurray.com/800/400">
          <?= $featured_performance->title() ?>
        </a>
      </li>
    <? endforeach ?>
  </ul>
</section>

<section class="p-section">
  <div class="p-grid">
    <? foreach($page_ads as $ad): ?>
      <div class="p-grid__item u-1/3">
        <? $ad = $pages->find("advertisements")->find($ad) ?>
        <? snippet("advertisement", array("ad" => $ad)) ?>
      </div>
    <? endforeach ?>
  </div>
</section>

<section hidden>
  <h2>
    Stay Updated
  </h2>

  <? snippet("newsletter-signup") ?>
</section>

<? snippet("layout-bottom") ?>
