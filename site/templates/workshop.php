<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>

  <nav class="c-back-link">
    <a href="<?= $page->parent()->url() ?>">
      <span class="c-back-link__arrow" aria-hidden="true">
        &larr;
      </span>

      Back to all <?= $page->parent()->title() ?>
    </a>
  </nav>
</header>

<? snippet("layout-bottom") ?>
