<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/4">
    <? snippet("programming-navigation") ?>
  </div>

  <div class="p-grid__item u-3/4">
    <ul class="p-grid u-list-bare">
      <? foreach($page->children()->visible() as $subpage): ?>
        <li class="p-grid__item u-1/2">
          <a href="<?= $subpage->url() ?>">
            <img src="http://fillmurray.com/800/400">
            <?= $subpage->title() ?>
          </a>
        </li>
      <? endforeach ?>
    </ul>
  </div>
</div>

<? if($page->advertisement()->isNotEmpty()): ?>
  <? $ad = $pages->find("advertisements")->find($page->advertisement()) ?>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endif ?>

<? snippet("layout-bottom") ?>
