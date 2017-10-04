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

<? if($page->advertisement()->isNotEmpty()): ?>
  <? $ad = $pages->find("advertisements")->find($page->advertisement()) ?>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endif ?>

<? snippet("layout-bottom") ?>
