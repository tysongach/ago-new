<? snippet("layout-top") ?>

<h1><?= $page->title() ?></h1>

<table>
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Event</th>
      <th scope="col">Featuring</th>
    </tr>
  </thead>
  <tbody>
    <? foreach($ordered_items as $item): ?>
      <tr>
        <td>
          <?= $item->date("M j, Y", "start_date") ?>
          <?= $item->date("g:ia ", "start_time") ?>
          <?= $item->date("g:ia ", "end_time") ?>
        </td>
        <td><?= $item->title() ?></td>
        <td></td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>

<? snippet("layout-bottom") ?>
