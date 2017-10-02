<? return function($site, $pages, $page) {
  $events = $site->index()->filterBy("template", "in", [
    "performance", "exhibit", "workshop", "worship"
  ]);

  $eventDate = function($p) {
    return $p->date("l, F j");
  };

  $groupedEvents = $events->visible()->group($eventDate);

  return compact("groupedEvents");
} ?>
