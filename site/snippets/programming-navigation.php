<nav class="c-vertical-nav" aria-label="Programming" role="navigation">
  <? foreach($page->siblings()->visible() as $sibling): ?>
    <a class="c-vertical-nav__link"
       href="<?= $sibling->url() ?>"
       <? ecco($sibling->isOpen(), ' aria-current="page"') ?>>
      <?= $sibling->title() ?>
    </a>
  <? endforeach ?>
</nav>
