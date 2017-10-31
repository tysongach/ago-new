<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/4">
    <? snippet("programming-navigation") ?>
  </div>

  <div class="p-grid__item s-prose u-3/4">
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<? if($page->advertisement()->isNotEmpty()): ?>
  <? $ad = $pages->find("advertisements")->find($page->advertisement()) ?>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endif ?>

<? snippet("layout-bottom") ?>
