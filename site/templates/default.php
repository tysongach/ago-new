<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-2/3@medium s-prose">
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
