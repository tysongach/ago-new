<? snippet("header") ?>

<h1><?= $site->title() ?></h1>

<time datetime="<?= $site->date("Y-m-d", "event_start_date") ?>">
  <?= $site->date("F j", "event_start_date") ?>
</time>
<span>&ndash;</span>
<time datetime="<?= $site->date("Y-m-d", "event_end_date") ?>">
  <?= $site->date("j, Y", "event_end_date") ?>
</time>

<span><?= $site->event_location() ?></span>

<ul>
  <? foreach($pages->find("advertisements")->children() as $ad): ?>
    <li>
      <a href="<?= $ad->destination_url() ?>">
        <img src="<?= $ad->images()->find($ad->art())->crop(480, 320)->url() ?>"
             alt="">
        <?= $ad->text() ?>
      </a>
    </li>
  <? endforeach ?>
</ul>

<? snippet("footer") ?>
