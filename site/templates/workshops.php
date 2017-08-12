<? snippet("header") ?>

<h1><?= $page->title()->html() ?></h1>

<? snippet("programming-navigation") ?>

<hr>

<nav role="navigation">
  <? foreach($page->children()->visible() as $subpage): ?>
    <a href="<?= $subpage->url() ?>">
      <?= $subpage->title() ?>
    </a>
  <? endforeach ?>
</nav>

<? snippet("footer") ?>
