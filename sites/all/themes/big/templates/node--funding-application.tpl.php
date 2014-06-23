<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

	
	  <?php print render($title_prefix); ?>
		<?php if(!$page) { ?>
			<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node->title; ?></a></h2>
		<?php }
		else { ?>
			<h1<?php print $title_attributes; ?>><?php print $node->title; ?></h1>
	  <?php } ?>
	<?php print render($title_suffix); ?>

	<?php 
		global $user; 
		$owner = user_load($node->uid);
		if($user->uid == $node->uid) {
			$my = TRUE;
		}
		
	?>
	<p><?php print bp_lexicon('Below you can find the funding application form that you have uploaded to our site. If you want to make any changes and re-upload, or download the original Big Potential blank form, you may click the "Edit Report" link underneath.'); ?></p>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  	<?php if(bp_can_user_edit($user, $node)): ?>
		<div id="edit-report">
			<a href="<?php print url('node/'.$node->nid.'/edit'); ?>" class="button back grey">Edit Application</a>
		</div>
		
		<div id="submit-report">
			<?php
				$flag = flag_get_flag('submit_funding_application_');
				if($flag->is_flagged($node->nid)) { ?>
				<p>Your Funding Application has been submitted to our team - thank you.</p>
				<p style="height: 5px !important;"></p>
			<?php	}
				else { ?>
				<p>When you feel you are ready, you can submit your Funding Application to Big Potential for consideration. It will be emailed to us and we will get back in touch with you within 5 working days.</p>	
				<p style="height: 5px !important;"></p>
			<?php	}
			?>
			<?php print flag_create_link('submit_funding_application_', $node->nid); ?>
		</div>
	<?php endif; ?>

</article>
