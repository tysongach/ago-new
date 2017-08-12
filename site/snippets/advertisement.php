<figure>
  <a href="<?= $ad->destination_url() ?>" target="_blank">
    <img src="<?= $ad->images()->find($ad->art())->crop(480, 320)->url() ?>"
         alt="">
    <figcaption>
      <?= $ad->text() ?>
    </figcaption>
  </a>
</figure>
