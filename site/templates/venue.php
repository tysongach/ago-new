<? snippet("layout-top") ?>

<h1><?= $page->title() ?></h1>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<p><?= $page->location() ?></p>
<p>
  <a href="<?= $page->website() ?>" target="_blank">
    Website
  </a>
</p>

<? snippet("layout-bottom") ?>
