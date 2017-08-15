<? return function($site, $pages, $page) {
  $ordered_events = $pages->find("programming")->children()->visible()->sortBy("start_date", "asc", "start_time", "asc");

  return compact("ordered_events");
} ?>
