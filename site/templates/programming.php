<? snippet("header") ?>

<h1><?= $page->title()->html() ?></h1>

<nav role="navigation">
  <? foreach($page->children()->visible() as $subpage): ?>
    <a href="<?= $subpage->url() ?>"<? e($subpage->isOpen(), ' aria-current="page"') ?>>
      <?= $subpage->title() ?>
    </a>
  <? endforeach ?>
</nav>

<? snippet("footer") ?>
