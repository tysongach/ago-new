<? return function($site, $pages, $page) {
  $items = $site->index()->filterBy("template", "in", ["performance", "exhibit", "workshop", "worship"]);
  $ordered_items = $items->visible()->sortBy("start_date", "asc", "start_time", "asc");

  return compact("ordered_items");
} ?>
