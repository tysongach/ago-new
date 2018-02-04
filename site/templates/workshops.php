<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/1 u-1/4@medium">
    <? snippet("programming-navigation") ?>
  </div>

  <div class="p-grid__item u-1/1 u-3/4@medium">
    <ul class="p-grid u-list-bare">
      <? foreach($page->children()->visible() as $subpage): ?>
        <li class="p-grid__item c-card u-1/2">
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

<? if($page->advertisements()->isNotEmpty()): ?>
  <div class="p-grid p-grid--align-right">
    <? foreach($page->advertisements()->toStructure() as $ad): ?>
      <div class="p-grid__item u-1/4">
        <? $ad = $pages->find("advertisements")->find($ad) ?>
        <? snippet("advertisement", array("ad" => $ad)) ?>
      </div>
    <? endforeach ?>
  </div>
<? endif ?>

<? snippet("layout-bottom") ?>
