<? snippet("maintenance-mode") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
    <?= css("assets/stylesheets/main.css") ?>
    <?= css("https://use.typekit.net/btb5kwj.css") ?>
    <? snippet("structured-data") ?>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="c-browser-notice">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
    <div class="p-container">
      <? snippet("site-navigation") ?>
        <main role="main">
