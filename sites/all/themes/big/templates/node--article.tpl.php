<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<div id="backlink">
	<a class="button grey noradius" title="Back to news" href="/news">Back to news</a>
</div>

	<?php print render($title_prefix); ?>
		<?php if(!$page) { ?>
			<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node->title; ?></a></h2>
		<?php }
		else { ?>
			<h1<?php print $title_attributes; ?>><?php print $node->title; ?></h1>
		<?php } ?>
	<?php print render($title_suffix); ?>
	<?php $author = user_load($node->uid); ?>
	
	<?php 
		if(isset($content['field_image'])) {
			print render($content['field_image']);
		}
	?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</article>
