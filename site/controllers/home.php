<? return function($site, $pages, $page) {
  $page_ads = $page->advertisements()->toStructure();

  return compact("featured_performances", "page_ads");
} ?>
