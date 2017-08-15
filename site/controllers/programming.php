<? return function($site, $pages, $page) {
  $all_ads = $pages->find("advertisements")->children()->visible();
  $page_ads = $all_ads->filterBy("page", $page)->shuffle()->limit(1);

  return compact("page_ads");
} ?>
