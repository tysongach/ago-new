<section class="p-section c-cta-section">
  <div class="c-cta-section__text">
    <?= $site->registration_cta_text()->kirbytext() ?>
  </div>

  <a class="c-button"
     href="<?= $site->cvent_registration_url() ?>"
     target="_blank"
     rel="noopener">
    Register
  </a>
</section>
