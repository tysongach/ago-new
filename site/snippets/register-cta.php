<? if($page != "registration"): ?>
  <hr>

  <aside>
    <?= $pages->find("registration")->cta_text()->kirbytext() ?>

    <a href="<?= $pages->find("registration")->cvent_registration_url() ?>"
       target="_blank">
      Register
    </a>
  </aside>
<? endif ?>
