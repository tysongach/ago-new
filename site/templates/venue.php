<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>

  <nav class="c-back-link">
    <a href="<?= $page->parent()->url() ?>">
      <span class="c-back-link__arrow" aria-hidden="true">
        &larr;
      </span>

      Back to all <?= $page->parent()->title() ?>
    </a>
  </nav>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/2">
    <address>
      <?= $page->street() ?><br>
      <?= $page->city() ?>, <?= $page->state() ?> <?= $page->zip() ?>
    </address>

    <? if($page->chapter_page()->isNotEmpty()): ?>
      <p>
        <a href="<?= $page->chapter_page() ?>" target="_blank">
          View organ details
        </a>
      </p>
    <? endif ?>
  </div>

  <div class="p-grid__item u-1/2">
    <img src="http://fillmurray.com/800/400">
  </div>
</div>

<? snippet("layout-bottom") ?>
