<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<h2 class="page-title"><?php print $node->title; ?></h2>
	<?php 
		global $user; 
		$owner = user_load($node->uid);
		if($user->uid == $node->uid) {
			$my = TRUE;
		}
	?>
	<?php
		$access = FALSE;
		if($user->uid > 0) {
			if($my) {
				$access = TRUE;
			}
			else {
				foreach($user->roles as $role) {
					switch(strtolower($role)) {
						case "administrator":
						case "site manager":
						case "site manager test role":
						case "provider manager":
						case "consultant":
							$access = TRUE;
						break;
					}
				}
			}
		}
		if(!$access) {
			drupal_goto('r4032login');
		}
	?>

	<?php hide($content['links']); ?>
	<?php dsm('fuckbox'); ?>
	<?php
		foreach($content as &$group) {
			foreach($group as &$field) {
				if(isset($field['#field_type'])) {
					switch($field['#field_name']) {
						case "field_sectors_you_work_in":
						case "field_areas_included":
						case "field_ap_identify_inv_readiness":
							foreach($field['#items'] as $key=>$item) {
								$field[$key]['#markup'] = '<div class="term-reference">'.$field[$key]['#markup'].'</div>';
							}
						break;
					}
				}
			}
		}
	?>
	<div class="panel white nopadding" id="buttons">
		<div class="printlinks">
			<?php print print_pdf_insert_link(); ?>		
		</div>
		<div class="buttons">
			<?php print flag_create_link('submit_funding_application_', $node->nid); ?>
			<?php if(bp_can_user_edit($user, $node)) {
				print '<a href="' . url('node/'.$node->nid.'/edit') . '" class="button back grey" id="edit-application">Edit</a>';
			} ?>	
		</div>
	</div>
	
	<div class="article-inner">
		<div class="save-note">
		<?php
			$flag = flag_get_flag('submit_funding_application_');
			if($flag->is_flagged($node->nid)) { ?>
			<p>Your Funding Application has been submitted to our team - thank you. We will review your application and confirm our decision to you within a maximum of eight weeks.</p>
			<p>If you have any questions in the meantime, please call our enquiry line on weekdays between 9am and 5pm on 0207 842 7788 or email bigpotential@sibgroup.org.uk.</p>
		<?php	}
			else { ?>
			<p>Please review all details below to ensure they are correct and then 'submit'.</p>			
		<?php	} ?>
		</div>
	<?php print render($content); ?>
	
	</div><!-- /article-inner -->
	<div class="panel white nopadding" id="buttons-bottom">
		<div class="buttons">
			<?php print flag_create_link('submit_funding_application_', $node->nid); ?>
			<?php if(bp_can_user_edit($user, $node)) {
				print '<a title="Edit your funding application" href="' . url('node/'.$node->nid.'/edit') . '" class="button back grey" id="edit-application">Edit</a>';
			} ?>	
		</div>
	</div>
</article>
