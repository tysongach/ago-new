<? return function($site, $pages, $page) {
  $performances = $pages->find("programming")->children()->visible();
  $featured_events = $performances->filterBy("featured", "true");

  $all_ads = $pages->find("advertisements")->children()->visible();
  $page_ads = $all_ads->filterBy("page", $page)->shuffle()->limit(3);

  return compact("featured_events", "page_ads");
} ?>
