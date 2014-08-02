<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<?php $previous_search = isset($_COOKIE['provider-search']) ? $_COOKIE['provider-search'] : ""; ?>
	<div id="backlink">
		<a class="button grey noradius" href="<?php print url('directory') . $previous_search; ?>" title="Previous search">Previous search</a>
	</div>

	<div id="provider-logo">
		<div class="wrapper"><?php print drupal_render($content['field_logo']); ?></div>
	</div>
	<div id="provider-remain">
	  <?php print render($title_prefix); ?>
			<?php if(!$page) { ?>
				<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node->title; ?></a></h2>
			<?php }
			else { ?>
				<h1<?php print $title_attributes; ?>><?php print $node->title; ?></h1>
			 <?php } ?>
		<?php print render($title_suffix); ?>
		<?php print drupal_render($content['field_region']); ?>
		<div class="no-consultants">Advisors: <?php print bp_advisor_count($node->nid); ?></div>
		<?php print drupal_render($content['field_provider_services']); ?>
		<?php print drupal_render($content['field_address']); ?>
		<?php print drupal_render($content['field_telephone']); ?>
		<div class="social">
			<?php if(isset($node->field_email['und'][0]['email'])): ?>
				<a class="email" href="mailto:<?php print $node->field_email['und'][0]['email']; ?>">Email</a>
			<?php endif; ?>
			<?php if(isset($node->field_twitter_handle['und'][0]['value'])): ?>
				<a target="_new" class="twitter" href="https://twitter.com/<?php print str_replace('@', '', $node->field_twitter_handle['und'][0]['value']); ?>">Twitter</a>
			<?php endif; ?>
			<?php if(isset($node->field_facebook_page['und'][0]['url'])): ?>
				<a target="_new" class="facebook" href="<?php print $node->field_facebook_page['und'][0]['url']; ?>">Facebook</a>
			<?php endif; ?>
			<?php if(isset($node->field_linkedin_page['und'][0]['url'])): ?>
				<a target="_new" class="linkedin" href="<?php print $node->field_linkedin_page['und'][0]['url']; ?>">LinkedIn</a>
			<?php endif; ?>			
		</div>
		<?php print drupal_render($content['field_introduction']); ?>
		<?php print drupal_render($content['body']); ?>
	

	  <?php
		// We hide the comments and links now so that we can render them later.
		hide($content['comments']);
		hide($content['links']);
	  ?>

	  <?php print render($content['links']); ?>
	  <?php print render($content['comments']); ?>
	</div>
	
</article>
