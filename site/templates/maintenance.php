<? if(c::get("maintenance_mode") == false): ?>
  <? go("/") ?>
<? else: ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
    </head>
    <body>
      <?= $page->text()->kirbytext() ?>
    </body>
  </html>
<? endif ?>
