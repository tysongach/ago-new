<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<table>
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Event</th>
      <th scope="col">Performers</th>
    </tr>
  </thead>
  <tbody>
    <? foreach($groupedEvents as $day => $eventsPerDay): ?>
      <tr>
        <th colspan="3">
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
            <?= $event->title() ?>
          </td>
          <td>
            <? foreach($event->performers()->toStructure() as $performer): ?>
              <? $performers = $pages->find("programming")->children()->find("performers") ?>
              <? $performer = $performers->find($performer) ?>
              <a href="<?= $performer->url() ?>">
                <?= $performer->title() ?>
              </a>
            <? endforeach ?>
          </td>
        </tr>
      <? endforeach; ?>
    <? endforeach ?>
  </tbody>
</table>

<? snippet("layout-bottom") ?>
