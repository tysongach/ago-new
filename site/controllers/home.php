<? return function($site, $pages, $page) {
  $page_title = preg_replace('/ /', '<br>', $site->title(), 1);

  $performances = $pages->find("programming")->children()->find("performances");
  $all_performances = $performances->children()->visible();
  $featured_performances = $all_performances->filterBy("featured", "true");

  $page_ads = $page->advertisements()->toStructure();

  return compact("page_title", "featured_performances", "page_ads");
} ?>
