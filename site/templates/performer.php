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
  <div class="p-grid__item u-1/2 s-prose">
    <p class="location"><?= $page->location() ?></p>
    <p><?= $page->bio()->kirbytext() ?></p>

    <ul>
      <? foreach($page->links()->toStructure() as $link): ?>
        <li>
          <a href="<?= $link->url() ?>" target="_blank">
            <?= $link->name() ?>
          </a>
        </li>
      <? endforeach ?>
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
