<? snippet("layout-top") ?>

<header class="p-grid p-section p-section--pad-bottom-only c-hero">
  <div class="p-grid__item c-hero__details u-1/3">
    <h1 class="c-hero__heading">
      <?= $page_title ?>
    </h1>

    <hr class="c-hero__line">

    <div class="c-hero__event-date">
      <time datetime="<?= $site->date("Y-m-d", "event_start_date") ?>">
        <?= $site->date("F j", "event_start_date") ?>
      </time>
      <span>&ndash;</span>
      <time datetime="<?= $site->date("Y-m-d", "event_end_date") ?>">
        <?= $site->date("j, Y", "event_end_date") ?>
      </time>
    </div>

    <p class="c-hero__event-location">
      <?= $site->event_location() ?>
    </p>

    <a class="c-button c-button--large c-hero__cta"
       href="<?= $pages->find("registration")->cvent_registration_url() ?>"
       target="_blank"
       rel="noopener">
      Register
    </a>
  </div>

  <div class="p-grid__item u-2/3 u-line-height-0">
    <? if($photo = $page->hero_photo()->toFile()): ?>
      <img src="<?= $photo->focusCrop(750, 500)->url() ?>"
           alt="">
    <? endif ?>
  </div>
</header>

<section class="p-section">
  <h2 class="p-section__heading">
    The AGO National Convention
  </h2>

  <?= $pages->find("about")->story()->kirbytext() ?>
</section>

<section class="p-section">
  <h2 class="p-section__heading">
    Featured Performances
  </h2>

  <ul class="p-grid u-list-bare">
    <? foreach($featured_performances as $featured_performance): ?>
      <li class="p-grid__item c-card u-1/2">
        <a class="c-card__link" href="<?= $featured_performance->url() ?>">
          <? if($photo = $featured_performance->photo()->toFile()): ?>
            <img src="<?= $photo->focusCrop(750, 500)->url() ?>" alt="">
          <? endif ?>
          <p class="c-card__title">
            <?= $featured_performance->title() ?>
          </p>
          <? if($venue = $pages->find("programming")->children()->find("venues")->find($featured_performance->venue())): ?>
            <p class="c-card__sub-title">
              <?= $venue->title() ?>
            </p>
          <? endif ?>
        </a>
      </li>
    <? endforeach ?>
  </ul>
</section>

<section class="p-section">
  <div class="p-grid">
    <? foreach($page_ads as $ad): ?>
      <div class="p-grid__item u-1/3">
        <? $ad = $pages->find("advertisements")->find($ad) ?>
        <? snippet("advertisement", array("ad" => $ad)) ?>
      </div>
    <? endforeach ?>
  </div>
</section>

<section class="p-section">
  <h2 class="p-section__heading">
    Stay Updated
  </h2>

  <p>
    Join our mailing list to get the latest news and announcements in your inbox.
  </p>

  <? snippet("newsletter-signup") ?>
</section>

<? snippet("layout-bottom") ?>
