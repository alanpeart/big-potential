<div class="profile"<?php print $attributes; ?>>
	<?php 
		/*******************************************
		* Have they completed an eligibility report? If not, show them a link.
		* If they have, are they eligible? Show appropriate message and link.
		* If they're eligible, have they already completed a diagnostic assessment?
		* If not, show them a link and a text prompt to get started.
		* If they have, link them to it with some different text.
		********************************************/
		global $user; $my=FALSE; $text="";
		$account = user_load($user->uid);
		if(arg(0) == 'user' && is_numeric(arg(1))) {
			if($user->uid == arg(1)) {

				$eligible_nid = bp_user_report($user->uid, 'nid', 'eligibility');
				
				if($eligible_nid > 0) {
					$eligible = isset($account->field_is_eligible['und'][0]) ? $account->field_is_eligible['und'][0]['value'] : 0;
					if($eligible == 1) {
						$text .= '<p>You have taken our eligibility test and we have determined that you are eligible to apply for funding.</p>';
						$text .= '<p>If for any reason you wish to re-take the eligibility text, you may do so by clicking on the button below.</p>';
						$text .= '<p><a class="button big play grey" href="/eligibility">Eligibility Check</a></p>';
						$diagnostic_nid = bp_user_report($user->uid, 'nid', 'diagnostic');
						if($diagnostic_nid > 0) {
							$text .= '<hr><p>You have already saved a Diagnostic Report on our site. Click the link below to return to your report, either to view the results or to edit the data and re-save.</p>';
							$text .= '<p><a class="button big play grey" href="/diagnostic-tool">Diagnostic Tool</a></p>';							
						}
						else {
							$text .= '<hr><p>You can click the link below to use our Diagnostic Tool for a detailed assessment of your readiness for a successful funding application.</p>';
							$text .= '<p><a class="button big play grey" href="/diagnostic-tool">Diagnostic Tool</a></p>';
						}
					}
					else {
						$text .= "You have taken our eligibility test and we have determined that you are not eligible to apply for funding based on the answers you have given.";
						$text .= '<p>If you wish to re-take the eligibility text, you may do so by clicking on the button below.</p>';
						$text .= '<a class="button big play grey" href="/eligibility">Eligibility Check</a>';						
					}
				}
				else {
						$text .= '<p>Click the link below to take our quick Eligibility test to find out if you are eligible to apply for funding. If you are, then you will be able to proceed to use our diagnostic tool to make a more detailed assessment of your readiness.</p>';
						$text .= '<p><a class="button big play grey" href="/eligibility">Eligibility Check</a></p>';				
				}
			}
		}
	?>
  <?php print render($user_profile); ?>
  <div id="report-links">
	<?php print $text; ?>
  </div>
</div>
