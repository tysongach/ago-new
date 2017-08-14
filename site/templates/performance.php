<? snippet("layout-top") ?>

<h1><?= $page->title() ?></h1>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<dl>
  <dt>Performers:</dt>

  <? foreach($page->performers()->toStructure() as $performer): ?>
    <? $performer = $page->parent()->siblings()->find("performers")->find($performer) ?>
    <dd>
      <a href="<?= $performer->url() ?>">
        <?= $performer->title() ?>
      </a>
      <p><?= $performer->bio() ?></p>
    </dd>
  <? endforeach ?>
</dl>

<? snippet("layout-bottom") ?>
