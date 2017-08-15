<? snippet("layout-top") ?>

<h1><?= $page->title() ?></h1>

<ul>
  <? foreach($ordered_items as $item): ?>
    <li>
      <?= $item->title() ?>
      <em>
        (<?= $item->date("M j, Y", "start_date") ?> <?= $item->date("g:ia ", "start_time") ?>)
      </em>
    </li>
  <? endforeach ?>
</ul>

<? snippet("layout-bottom") ?>
