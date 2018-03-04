<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>

  <nav class="c-back-link">
    <a href="<?= $page->parent()->url() ?>">
      <span class="c-back-link__arrow" aria-hidden="true">
        &larr;
      </span>

      Back to all <?= $page->parent()->title() ?>
    </a>
  </nav>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/2 s-prose">
    <ul>
      <li>
        <?= $page->date("l, F j") ?><br>
        <?= $page->date("g:i", "time") ?>&thinsp;&ndash;&thinsp;<?= $page->date("g:ia", "end_time") ?>
      </li>

      <? if($page->venue()->isNotEmpty()): ?>
        <li>
          <? if($venue = $pages->find("programming")->children()->find("venues")->find($page->venue())): ?>
            <a href="<?= $venue->url() ?>">
              <?= $venue->title() ?>
            </a>
          <? endif ?>
        </li>
      <? endif ?>
    </ul>

    <? if($page->performers()->isNotEmpty()): ?>
      <dl>
        <dt>Performers:</dt>

        <? foreach($page->performers()->toStructure() as $performer): ?>
          <? if($performer = $page->parent()->siblings()->find("performers")->find($performer)): ?>
            <dd>
              <a href="<?= $performer->url() ?>">
                <?= $performer->title() ?>
              </a>
            </dd>
          <? endif ?>
        <? endforeach ?>
      </dl>
    <? endif ?>

    <? if($page->composers()->isNotEmpty()): ?>
      <dl>
        <dt>Composers:</dt>

        <? foreach($page->composers()->toStructure() as $composer): ?>
          <? if($composer = $page->parent()->siblings()->find("composers")->find($composer)): ?>
            <dd>
              <a href="<?= $composer->url() ?>">
                <?= $composer->title() ?>
              </a>
            </dd>
          <? endif ?>
        <? endforeach ?>
      </dl>
    <? endif ?>
  </div>

  <div class="p-grid__item u-1/2">
    <? if($photo = $page->photo()->toFile()): ?>
      <img src="<?= $photo->focusCrop(750, 500)->url() ?>"
           alt="<?= $page->title()->html() ?>">
    <? endif ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
