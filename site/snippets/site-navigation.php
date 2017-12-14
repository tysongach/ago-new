<nav class="c-site-nav" role="navigation">
  <div class="c-site-nav__link-list">
    <? foreach($pages->visible() as $p): ?>
      <a class="c-site-nav__link"
         href="<?= $p->url() ?>"
         <? ecco($p->isOpen(), ' aria-current="page"') ?>>
        <?= $p->title() ?>
      </a>
    <? endforeach ?>

    <a class="c-site-nav__link"
       href="<?= $site->cvent_registration_url() ?>"
       target="_blank"
       rel="noopener">
      Register
    </a>

    <a class="c-site-nav__link"
       href="/programming/youth">
      Young Organists
    </a>
  </div>

  <? snippet("ago-kc-2018-logo") ?>
</nav>
