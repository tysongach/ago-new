<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<div class="p-grid">
  <div class="p-grid__item u-1/2">
    <p><?= $page->location() ?></p>
    <p>
      <a href="<?= $page->website() ?>" target="_blank">
        Website
      </a>
    </p>
  </div>

  <div class="p-grid__item u-1/2">
    <img src="http://fillmurray.com/800/400">
  </div>
</div>

<? snippet("layout-bottom") ?>
