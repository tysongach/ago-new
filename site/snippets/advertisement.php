<figure class="c-advertisement">
  <a class="c-advertisement__link"
     href="<?= $ad->destination_url() ?>"
     target="_blank">
    <img src="<?= $ad->images()->find($ad->art())->crop(480, 320)->url() ?>"
         alt="">
    <figcaption class="c-advertisement__text">
      <?= $ad->text() ?>
    </figcaption>
  </a>
</figure>
