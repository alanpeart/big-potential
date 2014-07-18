<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="article-inner">
	<h2 class="page-title"><?php print $node->title; ?></h2>
	<?php 
		global $user; 
		$owner = user_load($node->uid);
		if($user->uid == $node->uid) {
			$my = TRUE;
		}
	?>

	<?php hide($content['links']); ?>
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
	<div class="panel white" id="buttons">
		<?php print flag_create_link('submit_funding_application_', $node->nid); ?>
		<?php if(bp_can_user_edit($user, $node)) {
			print '<a href="' . url('node/'.$node->nid.'/edit') . '" class="button back grey" id="edit-application">Edit Application</a>';
		} ?>
		<div class="printlinks">
			<?php print print_pdf_insert_link(); ?>		
		</div>	
	</div>
	
	<?php print render($content); ?>
	
	</div><!-- /article-inner -->
	<div class="panel white" id="buttons">
		<?php print flag_create_link('submit_funding_application_', $node->nid); ?>
		<?php if(bp_can_user_edit($user, $node)) {
			print '<a href="' . url('node/'.$node->nid.'/edit') . '" class="button back grey" id="edit-application">Edit Application</a>';
		} ?>
	</div>
</article>
