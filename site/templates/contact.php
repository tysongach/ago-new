<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item s-prose u-2/3">
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
