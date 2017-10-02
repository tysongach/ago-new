<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<?= $page->story()->kirbytext() ?>

<? snippet("layout-bottom") ?>
