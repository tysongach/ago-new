<? if(c::get("maintenance_mode") == true): ?>
  <? if(!$site->user()) go("/maintenance") ?>
<? endif ?>
