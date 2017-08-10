<nav role="navigation">
  <? foreach($pages->visible() as $p): ?>
    <a href="<?= $p->url() ?>"<? e($p->isOpen(), ' aria-current="page"') ?>>
      <?= $p->title() ?>
    </a>
  <? endforeach ?>
</nav>
