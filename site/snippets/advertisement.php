<figure class="c-advertisement">
  <a class="c-advertisement__link"
     href="<?= $ad->destination_url() ?>?utm_source=agokc2018"
     target="_blank"
     rel="noopener">
    <img src="<?= $ad->images()->find($ad->art())->crop(480, 320)->url() ?>"
         alt="">
    <figcaption class="c-advertisement__text">
      <?= $ad->text() ?>
    </figcaption>
  </a>
</figure>
