<nav role="navigation">
  <? foreach($page->siblings()->visible() as $sibling): ?>
    <a href="<?= $sibling->url() ?>"<? e($sibling->isOpen(), ' aria-current="page"') ?>>
      <?= $sibling->title() ?>
    </a>
  <? endforeach ?>
</nav>
