<? snippet("layout-top") ?>

<h1><?= $page->title() ?></h1>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<? if($photo = $page->photo()->toFile()): ?>
  <img src="<?= $photo->crop(100)->url() ?>"
       alt="<?= $page->title()->html() ?>">
<? endif ?>

<p><?= $page->job_title() ?></p>
<p><?= $page->workplace() ?></p>
<p><?= $page->location() ?></p>
<p><?= $page->bio() ?></p>

<ul>
  <? foreach($page->links()->toStructure() as $link): ?>
    <li>
      <a href="<?= $link->url() ?>" target="_blank">
        <?= $link->name() ?>
      </a>
    </li>
  <? endforeach ?>
</ul>

<? snippet("layout-bottom") ?>
