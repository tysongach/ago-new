<? snippet("layout-top") ?>

<h1><?= $page->title()->html() ?></h1>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<? snippet("layout-bottom") ?>
