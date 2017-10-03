<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<?= $page->text()->kirbytext() ?>

<? snippet("layout-bottom") ?>
