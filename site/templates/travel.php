<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/1 u-1/4@medium">
    <nav class="c-vertical-nav" aria-label="Contact" role="navigation">
      <? foreach($page->children()->visible() as $subpage): ?>
        <a class="c-vertical-nav__link"
           href="<?= $subpage->url() ?>"
           <? ecco($subpage->isOpen(), ' aria-current="page"') ?>>
          <?= $subpage->title() ?>
        </a>
      <? endforeach ?>
    </nav>
  </div>

  <div class="p-grid__item s-prose u-1/1 u-3/4@medium">
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
