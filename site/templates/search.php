<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<ul class="u-2/3 u-margin-bottom--x-large">
  <li>
    The search will return any page where the entered word is found.
  </li>

  <li>
    Multiple words can be entered, but the search results will return any
    page where any of the words are found.
  </li>

  <li>
    Use the browser back button after clicking a link from the search
    results to return to the search page results.
  </li>
</ul>

<form class="u-margin-bottom--x-large">
  <label class="u-hide-visually" for="search">
    Search
  </label>

  <input
    id="search"
    type="search"
    name="q"
    placeholder="e.g. Workshop, Bach, Helzberg Hall"
    value="<?= esc($query) ?>"
  >

  <button class="c-button" type="submit">
    Search
  </button>
</form>

<? if(get("q")): ?>
  <? if($results->count()): ?>
    <ul>
      <? foreach($results as $result): ?>
        <li>
          <a href="<?= $result->url() ?>">
            <?= $result->title()->html() ?>
          </a>
        </li>
      <? endforeach ?>
    </ul>
  <? else: ?>
    <p>No results found.</p>
  <? endif ?>
<? endif ?>

<? snippet("layout-bottom") ?>
