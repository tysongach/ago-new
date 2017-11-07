<? snippet("layout-top") ?>

<header class="p-grid p-section p-section--pad-bottom-only c-hero">
  <div class="p-grid__item c-hero__details u-1/1 u-1/3@medium">
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
       href="<?= $site->cvent_registration_url() ?>"
       target="_blank"
       rel="noopener">
      Register
    </a>
  </div>

  <div class="p-grid__item u-1/1 u-2/3@medium">
    <div class="c-carousel" data-js="hero-carousel">
      <? foreach($page->hero_photos()->toStructure() as $photo): ?>
        <figure class="c-carousel__cell" data-js="hero-carousel-cell">
          <img src="<?= $page->image($photo)->focusCrop(1125, 750)->url() ?>"
               alt="">
          <figcaption class="c-carousel__cell-caption">
            <?= $page->image($photo)->caption() ?>
          </figcaption>
        </figure>
      <? endforeach ?>
    </div>
  </div>
</header>

<section class="p-section">
  <h2 class="p-section__heading">
    The AGO National Convention
  </h2>

  <div class="s-prose">
    <?= $pages->find("about")->story()->kirbytext() ?>
  </div>

  <div class="button-row">
    <? snippet("donate-form") ?>

    <a class="c-button" href="/contact/advertising">
      Advertise
    </a>

    <a class="c-button" href="/contact/exhibiting">
      Exhibit
    </a>
  </div>
</section>

<? if($featured_venues->count() > 0): ?>
  <section class="p-section">
    <h2 class="p-section__heading">
      Select Venues
    </h2>

    <ul class="p-grid u-list-bare">
      <? foreach($featured_venues as $featured_venue): ?>
        <li class="p-grid__item c-card u-1/2">
          <a class="c-card__link" href="<?= $featured_venue->url() ?>">
            <? if($photo = $featured_venue->photo()->toFile()): ?>
              <img src="<?= $photo->focusCrop(750, 500)->url() ?>" alt="">
            <? endif ?>
            <p class="c-card__title">
              <?= $featured_venue->title() ?>
            </p>
          </a>
        </li>
      <? endforeach ?>
    </ul>
  </section>
<? endif ?>

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

<script src="/node_modules/flickity/dist/flickity.pkgd.min.js"></script>
<script>
  var elem = document.querySelector('[data-js="hero-carousel"]');
  var flkty = new Flickity( elem, {
    autoPlay: 5000,
    cellSelector: '[data-js="hero-carousel-cell"]',
    pageDots: false,
    prevNextButtons: false,
    wrapAround: true
  });
</script>

<? snippet("layout-bottom") ?>
