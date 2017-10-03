<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>

  <nav class="c-back-link">
    <? $programming = $pages->find("programming") ?>
    <a href="<?= $programming->url() ?>">
      <span class="c-back-link__arrow" aria-hidden="true">
        &larr;
      </span>

      Back to all <?= $programming->title() ?>
    </a>
  </nav>
</header>

<div class="p-grid">
  <div class="p-grid__item u-1/2">
    <p><?= $page->job_title() ?></p>
    <p><?= $page->workplace() ?></p>
    <p><?= $page->location() ?></p>
    <p><?= $page->bio() ?></p>

    <ul>
      <? foreach($page->links()->toStructure() as $link): ?>
        <li>
          <a href="<?= $link->url() ?>" target="_blank">
            <?= $link->name() ?>
          </a>
        </li>
      <? endforeach ?>
    </ul>
  </div>

  <div class="p-grid__item u-1/2">
    <? if($photo = $page->photo()->toFile()): ?>
      <img src="<?= $photo->crop(100)->url() ?>"
           alt="<?= $page->title()->html() ?>">
    <? endif ?>
  </div>
</div>

<? snippet("layout-bottom") ?>
