<? snippet("layout-top") ?>

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

<? if($page->advertisement()->isNotEmpty()): ?>
  <? $ad = $pages->find("advertisements")->find($page->advertisement()) ?>
  <hr>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endif ?>

<? snippet("layout-bottom") ?>
