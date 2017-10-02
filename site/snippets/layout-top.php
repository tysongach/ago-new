<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
    <?= css("assets/stylesheets/main.css") ?>
    <?= css("https://use.typekit.net/btb5kwj.css") ?>
  </head>
  <body>
    <div class="p-container">
      <? snippet("site-navigation") ?>
        <main role="main">
