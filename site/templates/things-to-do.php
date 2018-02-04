<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/1 u-1/4@medium">
    <nav class="c-vertical-nav" aria-label="Hotel & Travel" role="navigation">
      <? foreach($page->siblings()->visible() as $sibling): ?>
        <a class="c-vertical-nav__link"
           href="<?= $sibling->url() ?>"
           <? ecco($sibling->isOpen(), ' aria-current="page"') ?>>
          <?= $sibling->title() ?>
        </a>
      <? endforeach ?>
    </nav>
  </div>

  <div class="p-grid__item u-1/1 u-3/4@medium">
    <ul class="p-grid u-list-bare">
      <? foreach($page->children()->visible() as $subpage): ?>
        <li class="p-grid__item c-card u-1/3">
          <a class="c-card__link" href="<?= $subpage->url() ?>">
            <? if($photo = $subpage->photo()->toFile()): ?>
              <img src="<?= $photo->focusCrop(525, 350)->url() ?>" alt="">
            <? endif ?>
            <p class="c-card__title">
              <?= $subpage->title() ?>
            </p>
          </a>
        </li>
      <? endforeach ?>
    </ul>
  </div>
</div>

<? snippet("layout-bottom") ?>
