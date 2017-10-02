<nav role="navigation">
  <? foreach($page->siblings()->visible() as $sibling): ?>
    <a href="<?= $sibling->url() ?>"
       <? ecco($sibling->isOpen(), ' aria-current="page"') ?>>
      <?= $sibling->title() ?>
    </a>



    <br>



  <? endforeach ?>
</nav>
