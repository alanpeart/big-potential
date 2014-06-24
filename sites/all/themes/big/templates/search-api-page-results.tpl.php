<div class="<?php print $classes;?>">
  <div id="backlink" class="search-performance">
		<div class="search-performance-inner">
		<strong><?php print isset($result_count) ? $result_count : 0; ?></strong> Result<?php if($result_count != 1) { print 's'; } ?> for <strong>&lsquo;<?php print $keys; ?>&rsquo;</strong>
		</div>
  </div>
  <?php print render($spellcheck); ?>
  <?php if ($result_count): ?>
    <h2><?php print t('Search results');?></h2>
    <ol class="search-results">
      <?php print render($search_results); ?>
    </ol>
    <?php print render($pager); ?>
  <?php else : ?>
    <h2><?php print t('Your search yielded no results.');?></h2>
    <?php print $no_results_help; ?>
  <?php endif; ?>
</div>
