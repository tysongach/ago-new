<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<? snippet("layout-bottom") ?>
