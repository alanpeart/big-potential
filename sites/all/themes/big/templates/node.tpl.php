<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<?php 
	if(isset($content['field_image'])) {
		print render($content['field_image']);
	}
	if(isset($content['field_video'])) {
		print render($content['field_video']);
	}	
?>
	
	  <?php print render($title_prefix); ?>
		<?php if(!$page) { ?>
			<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node->title; ?></a></h2>
		<?php }
		else { ?>
			<h1<?php print $title_attributes; ?>><?php print $node->title; ?></h1>
	  <?php } ?>
	<?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="posted">
      <?php if ($user_picture): ?>
        <?php print $user_picture; ?>
      <?php endif; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <?php if (!empty($content['field_tags']) && !$is_front): ?>
    <?php print render($content['field_tags']) ?>
  <?php endif; ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</article>
