<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/4">
    <nav class="c-vertical-nav" aria-label="Contact" role="navigation">
      <? foreach($page->siblings()->visible() as $sibling): ?>
        <a class="c-vertical-nav__link"
           href="<?= $sibling->url() ?>"
           <? ecco($sibling->isOpen(), ' aria-current="page"') ?>>
          <?= $sibling->title() ?>
        </a>
      <? endforeach ?>
    </nav>
  </div>

  <div class="p-grid__item s-prose u-3/4">
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
