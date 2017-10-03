<nav class="c-site-nav" role="navigation">
  <? foreach($pages->visible() as $p): ?>
    <a class="c-site-nav__link"
       href="<?= $p->url() ?>"
       <? ecco($p->isOpen(), ' aria-current="page"') ?>>
      <?= $p->title() ?>
    </a>
  <? endforeach ?>

  <? snippet("ago-kc-2018-logo") ?>
</nav>
