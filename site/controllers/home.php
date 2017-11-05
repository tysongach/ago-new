<? return function($site, $pages, $page) {
  $page_title = preg_replace('/ /', '<br>', $site->title(), 1);

  $venues = $pages->find("programming")->children()->find("venues");
  $all_venues = $venues->children()->visible();
  $featured_venues = $all_venues->filterBy("featured", "true");

  $page_ads = $page->advertisements()->toStructure();

  return compact("page_title", "featured_venues", "page_ads");
} ?>
