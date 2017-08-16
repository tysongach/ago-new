<? snippet("layout-top") ?>

<h1><?= $page->title() ?></h1>

<? $event_types = $page->children()->visible()->pluck("event_type", ",", true); ?>

<ul>
  <? foreach($event_types as $type): ?>
    <li>
      <a href="<?= url("programming/" . url::paramsToString(["type" => $type])) ?>">
        <?= html($type) ?>
      </a>
    </li>
  <? endforeach ?>
</ul>

<?
  $events = $page->children()->visible();

  if($type = param("type")) {
    $events = $events->filterBy("event_type", $type);
  }
?>

<ul>
  <? foreach($events as $event): ?>
    <li>
      <a href="<?= $event->url() ?>">
        <?= $event->title() ?>
      </a>
    </li>
  <? endforeach ?>
</ul>

<? foreach($page_ads as $ad): ?>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endforeach ?>

<? snippet("layout-bottom") ?>
