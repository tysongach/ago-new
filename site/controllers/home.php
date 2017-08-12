<? return function($site, $pages, $page) {
  $performances = $pages->find("programming")->children()->find("performances");
  $all_performances = $performances->children()->visible();
  $featured_performances = $all_performances->filterBy("featured", "true");

  $page_ads = $page->advertisements()->toStructure();

  return compact("featured_performances", "page_ads");
} ?>
