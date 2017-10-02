<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
    <?= css("assets/stylesheets/main.css") ?>
    <script src="https://use.typekit.net/mai5joe.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>
  <body>
    <div class="p-container">
      <? snippet("site-navigation") ?>
        <main role="main">
