<? snippet("header") ?>

<h1><?= $page->title()->html() ?></h1>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<dl>
  <dt>Performers:</dt>

  <? foreach($page->performers()->toStructure() as $performer): ?>
    <? $performer = $page->parent()->siblings()->find("performers")->find($performer) ?>
    <dd>
      <p><?= $performer->title() ?></p>
      <p><?= $performer->bio() ?></p>
    </dd>
  <? endforeach ?>
</dl>

<? snippet("footer") ?>
