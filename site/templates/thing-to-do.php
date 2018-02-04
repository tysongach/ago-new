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
    <div class="s-prose">
      <?= $page->text()->kirbytext() ?>

    <? if($page->website()->isNotEmpty()): ?>
      <p>
        <a href="<?= $page->website() ?>" target="_blank">
          <?= $page->title() ?> Website
        </a>
      </p>
    <? endif ?>
    </div>

    <address>
      <?= $page->street() ?><br>
      <?= $page->city() ?>, <?= $page->state() ?> <?= $page->zip() ?>
    </address>

    <p>
      <a href="<?= $google_maps_url ?>" target="_blank">
        View in Google Maps
      </a>
    </p>
  </div>

  <div class="p-grid__item u-1/2">
    <? if($photo = $page->photo()->toFile()): ?>
      <img src="<?= $photo->focusCrop(750, 500)->url() ?>"
           alt="<?= $page->title()->html() ?>">
    <? endif ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
