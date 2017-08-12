<? snippet("layout-top") ?>

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
      <a href="<?= $featured_performance->url() ?>">
        <?= $featured_performance->title() ?>
      </a>
    </li>
  <? endforeach ?>
</ul>

<? foreach($page_ads as $ad): ?>
  <? $ad = $pages->find("advertisements")->find($ad) ?>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endforeach ?>

<? snippet("layout-bottom") ?>
