<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<table class="c-schedule">
  <thead class="c-schedule__head">
    <tr>
      <th class="c-schedule__column-heading" scope="col">
        Time
      </th>
      <th class="c-schedule__column-heading" scope="col">
        Event
      </th>
      <th class="c-schedule__column-heading" scope="col">
        Featuring
      </th>
    </tr>
  </thead>
  <tbody>
    <? foreach($groupedEvents as $day => $eventsPerDay): ?>
      <tr>
        <th class="c-schedule__day-heading" colspan="3" scope="colgroup">
          <?= $day ?></h2>
        </th>
      </tr>

      <? foreach($eventsPerDay->map(function($page) {
           $page->sortableTime = strtotime($page->date("H:i", "time"));
           return $page;
         }
      )->sortBy("sortableTime", "asc") as $event): ?>
        <tr>
          <td>
            <?= $event->date("g:i", "time") ?>&thinsp;&ndash;<br>
            <?= $event->date("g:ia", "end_time") ?>
          </td>
          <td>
            <span class="c-schedule__event-title">
              <?= $event->title() ?>
            </span>
            <br>
            <? if($venue = $pages->find("programming")->children()->find("venues")->find($event->venue())): ?>
              <?= $venue->title() ?>
            <? endif ?>
          </td>
          <td>
            <? foreach($event->performers()->toStructure() as $performer): ?>
              <? $performers = $pages->find("programming")->children()->find("performers") ?>
              <? $performer = $performers->find($performer) ?>
              <a href="<?= $performer->url() ?>">
                <?= $performer->title() ?>
              </a><br>
            <? endforeach ?>
          </td>
        </tr>
      <? endforeach; ?>
    <? endforeach ?>
  </tbody>
</table>

<? snippet("layout-bottom") ?>
