<? if($page != "registration"): ?>
  <section class="p-section c-cta-section">
    <div class="c-cta-section__text">
      <?= $pages->find("registration")->cta_text()->kirbytext() ?>
    </div>

    <a class="c-button"
       href="<?= $pages->find("registration")->cvent_registration_url() ?>"
       target="_blank">
      Register
    </a>
  </section>
<? endif ?>
