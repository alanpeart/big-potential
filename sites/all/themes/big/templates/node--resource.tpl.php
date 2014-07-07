	<?php 
		$icon = $node->field_format['und'][0]['value'];
	?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

	<div id="backlink">
		<a class="button grey noradius" href="<?php print url('resources') . $_COOKIE['resource-search']; ?>" title="Previous search">Previous search</a>
	</div>

	<div id="resource-icon">
		<div class="wrapper"><img alt="<?php print $icon; ?>" src="/sites/all/themes/big/images/icon-<?php print $icon; ?>.png" /></div>
	</div>
	<div id="resource-remain">
	
	  <?php print render($title_prefix); ?>
			<?php if(!$page) { ?>
				<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node->title; ?></a></h2>
			<?php }
			else { ?>
				<h1<?php print $title_attributes; ?>><?php print $node->title; ?></h1>
		  <?php } ?>
	  <?php print render($title_suffix); ?>

	  <div id="author" class="field clearfix">
		<?php print render($content['field_attribution']; ?>
	  </div>

	  <?php
		// We hide the comments and links now so that we can render them later.
		hide($content['comments']);
		hide($content['links']);
		hide($content['field_tags']);
		hide($content['field_rating']);
		print render($content);
		if(isset($node->field_slideshare['und'][0])) {
			print '<div class="pdf-download"><a href="/sites/default/files/'.str_replace('public://', '', $node->field_slideshare['und'][0]['uri']).'" title="Download file" class="pdf-download-link">Click to download</a></div>';
		}
		print render($content['field_tags']);
		print render($content['field_rating']);
	  ?>

	  <?php print render($content['links']); ?>
	  <?php print render($content['comments']); ?>
	</div>
	
</article>
