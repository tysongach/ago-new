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
    <?= $page->text()->kirbytext() ?>

    <ul>
      <li>
        <?= $page->date("l, F j") ?><br>
        <?= $page->date("g:i", "time") ?>&thinsp;&ndash;&thinsp;<?= $page->date("g:ia", "end_time") ?>
      </li>
      <li><?= $page->venue() ?></li>
    </ul>
  </div>

  <div class="p-grid__item u-1/2">
    <? if($photo = $page->photo()->toFile()): ?>
      <img src="<?= $photo->focusCrop(750, 500)->url() ?>"
           alt="<?= $page->title()->html() ?>">
    <? endif ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
