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
  <? foreach($featured_performances as $featured_performance): ?>
    <li>
      <?= $featured_performance->title() ?>
    </li>
  <? endforeach ?>
</ul>

<? foreach($page_ads as $ad): ?>
  <? $ad = $pages->find("advertisements")->find($ad) ?>
  <figure>
    <a href="<?= $ad->destination_url() ?>" target="_blank">
      <img src="<?= $ad->images()->find($ad->art())->crop(480, 320)->url() ?>"
           alt="">
      <figcaption>
        <?= $ad->text() ?>
      </figcaption>
    </a>
  </figure>
<? endforeach ?>

<? snippet("footer") ?>
