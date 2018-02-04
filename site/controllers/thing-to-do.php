<? return function($site, $pages, $page) {
  $google_maps_query_url = "https://www.google.com/maps/search/?api=1&query=";
  $full_address = $page->street() . " " . $page->city() . " " . $page->state() . " " . $page->zip();
  $encoded_address = urlencode($full_address);
  $google_maps_url = $google_maps_query_url . $encoded_address;

  return compact("google_maps_url");
} ?>
