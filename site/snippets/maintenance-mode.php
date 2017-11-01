<? if($site->maintenance_mode()->isTrue()): ?>
  <? if(!$site->user()) go("/maintenance") ?>
<? endif ?>
