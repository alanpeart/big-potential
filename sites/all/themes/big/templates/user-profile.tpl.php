<div class="profile"<?php print $attributes; ?>>
	<?php 
		/*******************************************
		* Have they completed an eligibility report? If not, show them a link.
		* If they have, are they eligible? Show appropriate message and link.
		* If they're eligible, have they already completed a diagnostic assessment?
		* If not, show them a link and a text prompt to get started.
		* If they have, link them to it with some different text.
		********************************************/
		global $user; $my=FALSE; $text=""; $address="";
		$diagnostic_text = $diagnostic_link = $eligibility_text = $eligibility_link = $eligibility_retake = $diagnostic_retake = $funding_text = $funding_link = $funding_retake = $provider_text = $provider_link = $provider_users = "";
		$is_consultant = $is_advisor = $is_admin = $is_pm = FALSE; $provider_nid = 0;

		if(arg(0) == 'user' && is_numeric(arg(1))) {
			$profile_uid = arg(1);
			$account = user_load($profile_uid);
			$my = $account->uid == $user->uid ? TRUE : FALSE;
			// dsm($account);
			$org="";
			if(!isset($account->field_organisation_name['und'][0]) || strlen($account->field_organisation_name['und'][0]['safe_value']) == 0) {
				if(isset($account->field_provider_organisation['und'][0])) {
					$orgnid = $account->field_provider_organisation['und'][0]['nid'];
					$orgNode = node_load($orgnid);
					if(isset($orgNode)) {
						$org = $orgNode->title;
					}
				}
			}
			else {
				$org = $account->field_organisation_name['und'][0]['safe_value'];
			}
			if(array_intersect(array('Site Manager', 'administrator', 'Site Manager Test Role'), array_values($user->roles))) { $is_admin = TRUE; }
			if(in_array('Consultant', $account->roles)) { $is_consultant = TRUE; }
			if(in_array('Advisor', $account->roles)) { $is_advisor = TRUE; }
			if(in_array('Provider Manager', $account->roles)) { $is_pm = TRUE; }

			if(bp_can_user_edit($user, $account)) {

				$eligible_nid = bp_user_report($account->uid, 'nid', 'eligibility');
				
				if($eligible_nid > 0) {
					$eligible = isset($account->field_is_eligible['und'][0]) ? $account->field_is_eligible['und'][0]['value'] : 0;
					if($eligible == 1) {
						$el_panel_class = "green";
						if($my) {							
							$eligibility_text .= '<p>You have taken our eligibility test and we have determined that you are eligible to apply for funding.</p>';
							$eligibility_retake .= '<p>If for any reason you wish to re-take the eligibility text, you may do so by clicking on the button below.</p>';
							$eligibility_link .= '<p><a class="button big navy" href="/eligibility">Eligibility Check</a></p>';
						}
						else {
							$eligibility_text .= '<p>This user has taken our eligibility test and we have determined that they are eligible to apply for funding.</p>';
							$eligibility_retake .= '<p>If you wish to edit their eligibility check, you may do so by clicking on the button below.</p>';
							$eligibility_link .= '<p><a class="button big navy" href="/eligibility/'.$eligible_nid.'">Eligibility Check</a></p>';					
						}
					}
					else {
						$el_panel_class = "red";
						if($my) {
							$eligibility_text .= "<p>You have taken our eligibility test and we have determined that you are not eligible to apply for funding based on the answers you have given.</p>";
							$eligibility_retake .= '<p>If you wish to re-take the eligibility text, you may do so by clicking on the button below.</p>';
							$eligibility_link .= '<a class="button big navy" href="/eligibility">Eligibility Check</a>';
						}
						else {
							$eligibility_text .= "<p>This user has taken our eligibility test and we have determined that they are not eligible to apply for funding based on the answers they have given.</p>";
							$eligibility_retake .= '<p>If you wish to edit their eligibility check, you may do so by clicking on the button below.</p>';
							$eligibility_link .= '<p><a class="button big navy" href="/eligibility/'.$eligible_nid.'">Eligibility Check</a></p>';						
						}
					}
				}
				else {
					$el_panel_class = "red";
					if($my) {
						$eligibility_text .= '<p>Click the link below to take our quick Eligibility test to find out if you are eligible to apply for funding.</p>';
						$eligibility_retake .= '<p>If you are, then you will be able to proceed to use our diagnostic tool to make a more detailed assessment of your readiness.</p>';
						$eligibility_link .= '<p><a class="button big navy" href="/eligibility">Eligibility Check</a></p>';		
					}
					else {
						$eligibility_text .= '<p>Click the link below to take our quick Eligibility test to find out if you are eligible to apply for funding.</p>';
						$eligibility_retake .= '<p>This user has not yet used the eligibility checker.</p>';
						$eligibility_link .= '<p><a class="button big navy" href="#">Eligibility Check</a></p>';	
					}
				}
				$diagnostic_nid = bp_user_report($account->uid, 'nid', 'diagnostic');
				if($diagnostic_nid > 0) {
					$di_panel_class = "green";
					if($my) {
						$diagnostic_text .= '<p>You have already saved a Diagnostic Report on our site.</p>';
						$diagnostic_retake .= '<p>Click the link below to return to your report, either to view the results or to edit the data and re-save.</p>';
						$diagnostic_link .= '<p><a class="button big navy" href="/diagnostic-tool">Diagnostic Tool</a></p>';		
					}
					else {
						$diagnostic_text .= '<p>This user has already saved a Diagnostic Report on our site.</p>';
						$diagnostic_retake .= '<p>Click the link below to view their report or to edit the data and re-save.</p>';
						$diagnostic_link .= '<p><a class="button big navy" href="/diagnostic/'.$diagnostic_nid.'">Diagnostic Tool</a></p>';							
					}
				}
				else {
					$di_panel_class = "red";
					if($my) {
						$diagnostic_text .= '<p>You can click the link below to use our Diagnostic Tool for a detailed assessment of your readiness for a successful funding application.</p>';
						$diagnostic_retake .= '<p>You can save any data you enter and return to complete the report at any time.</p>';
						$diagnostic_link .= '<p><a class="button big navy" href="/diagnostic-tool">Diagnostic Tool</a></p>';
					}
					else {
						$diagnostic_text .= '<p>This user has not yet used our diagnostic tool.</p>';
						$diagnostic_retake .= '<p></p>';
						$diagnostic_link .= '<p><a class="button big navy" href="#">Diagnostic Tool</a></p>';					
					}
				}	
				$funding_nid = bp_user_report($account->uid, 'nid', 'application');
				if($funding_nid > 0) {
					$fu_panel_class = "green";
					if($my) {
						$funding_text .= '<p>You have saved a funding application on our site.</p>';
						$funding_retake .= '<p>If you want to view your application you can do so by clicking the link below.</p>';
						$funding_link .= '<p><a class="button big navy" href="/application/'.$funding_nid.'">Funding Application</a></p>';	
					}
					else {
						$funding_text .= '<p>This user has saved a funding application on our site.</p>';
						$funding_retake .= '<p>If you want to view their application you can do so by clicking the link below.</p>';
						$funding_link .= '<p><a class="button big navy" href="/application/'.$funding_nid.'">Funding Application</a></p>';				
					}
				}
				else {
					$fu_panel_class = "red";
					if($my) {
						$funding_text .= '<p>You can use the link below to make a funding application to Big Lottery.</p>';
						$funding_retake .= '<p>You will be able to save and revisit the funding application before submitting it if you wish.</p>';
						$funding_link .= '<p><a class="button big navy" href="/funding-application">Funding Application</a></p>';	
					}
					else {
						$funding_text .= '<p>This user has not yet made a funding application.</p>';
						$funding_retake .= '<p>They will be able to save and revisit the funding application before submitting it if they wish.</p>';
						$funding_link .= '<p><a class="button big navy" href="/funding-application">Funding Application</a></p>';				
					}				
				}
			}
		}

		if(isset($account->field_address['und'])) {
			$address = bp_address_string($account->field_address['und'][0]);
		}
	?>
	<?php if(bp_can_user_edit($user, $account)): ?>
		<div id="profile-edit-link"><a href="/user/<?php print $profile_uid; ?>/edit?destination=user/<?php print $profile_uid; ?>" class="button blue">Edit</a></div>
	<?php endif; ?>
	<h1 id="page-title"><?php print $user->uid == $profile_uid ? 'My account' : $account->name; ?></h1>
	<div id="dashboard">
		<?php if($user->uid == $profile_uid): ?>
			<h2 class="user-welcome">Welcome <?php print $account->name; ?></h2>
		<?php endif; ?>
		<div class="dashpanel" id="profile-info">
			<?php print render($user_profile['user_picture']); ?>
			<div class="profile-field">
				<div class="profile-label">Name:</div>
				<div class="textbox"><?php print $account->name; ?></div>
			</div>
			<div class="profile-field">
				<div class="profile-label">Organisation:</div>
				<div class="textbox"><?php print $org; ?></div>
			</div>		
			<?php if(isset($account->field_job_title['und'][0])): ?>
				<div class="profile-field">
					<div class="profile-label">Job Title:</div>
					<div class="textbox"><?php print $account->field_job_title['und'][0]['safe_value']; ?></div>
				</div>	
			<?php endif; ?>
			<div class="profile-field">
				<div class="profile-label">Email:</div>
				<div class="textbox"><?php print $account->mail; ?></div>
			</div>	
			<?php if(strlen($address) > 0): ?>
				<div class="profile-field">
					<div class="profile-label">Address:</div>
					<div class="textbox"><?php print $address; ?></div>
				</div>	
			<?php endif; ?>
			<?php if(isset($account->field_telephone['und'][0])): ?>			
				<div class="profile-field">
					<div class="profile-label">Telephone:</div>
					<div class="textbox"><?php print $account->field_telephone['und'][0]['safe_value']; ?></div>
				</div>
			<?php endif; ?>
			<?php if(isset($account->field_mobile['und'][0])): ?>
				<div class="profile-field">
					<div class="profile-label">Mobile:</div>
					<div class="textbox"><?php print $account->field_mobile['und'][0]['safe_value']; ?></div>
				</div>
			<?php endif; ?>
			<?php if(isset($account->field_website['und'][0])): ?>
				<div class="profile-field">
					<div class="profile-label">Website:</div>
					<div class="textbox"><?php print $account->field_website['und'][0]['url']; ?></div>
				</div>
			<?php endif; ?>			
			<?php if(isset($account->field_twitter_handle['und'][0])): ?>
				<div class="profile-field">
					<div class="profile-label">Twitter:</div>
					<div class="textbox"><?php print $account->field_twitter_handle['und'][0]['safe_value']; ?></div>
				</div>		
			<?php endif; ?>
			<?php if(isset($account->field_facebook_page['und'][0])): ?>
				<div class="profile-field">
					<div class="profile-label">Facebook:</div>
					<div class="textbox"><?php print $account->field_facebook_page['und'][0]['display_url']; ?></div>
				</div>	
			<?php endif; ?>
			<?php if(isset($account->field_linkedin_page['und'][0])): ?>
				<div class="profile-field">
					<div class="profile-label">LinkedIn:</div>
					<div class="textbox"><?php print $account->field_linkedin_page['und'][0]['display_url']; ?></div>
				</div>		
			<?php endif; ?>
		</div>
		<?php if(!$is_consultant && !$is_advisor && !$is_pm): ?>
			<?php if(bp_can_user_edit($user, $account)): ?>
				<div class="dashpanel onethird left <?php print $el_panel_class; ?>">
					<h2>Eligibility Check</h2>
					<div class="darkbold">
						<?php print $eligibility_text; ?>
					</div>
					<?php if(strlen($eligibility_retake) > 0): ?>
						<div class="subtext">
							<?php print $eligibility_retake; ?>
						</div>
					<?php endif; ?>
					<?php print $eligibility_link; ?>
				</div>
				<div class="dashpanel onethird middle <?php print $di_panel_class; ?>">
					<h2>Diagnostic Tool</h2>
					<div class="darkbold">
						<?php print $diagnostic_text; ?>
					</div>
					<?php if(strlen($diagnostic_retake) > 0): ?>
						<div class="subtext">
							<?php print $diagnostic_retake; ?>
						</div>
					<?php endif; ?>			
					<?php print $diagnostic_link; ?>			
				</div>		
				<div class="dashpanel onethird right <?php print $fu_panel_class; ?>" id="funding-status">
					<h2>Funding Status</h2>
					<div class="darkbold">
						<?php print $funding_text; ?>
					</div>
					<?php if(strlen($funding_retake) > 0): ?>
						<div class="subtext">
							<?php print $funding_retake; ?>
						</div>
					<?php endif; ?>			
					<?php print $funding_link; ?>			
				</div>
				<?php 
					$checkempty = views_get_view_result('connected_consultants', 'block', $account->uid);
					if(!empty($checkempty)) { ?>
						<div class="dashpanel" id="connected-consultants">
							<h2>Connected Consultants</h2>
							<?php print views_embed_view('connected_consultants', 'block'); ?>
						</div>
				<?php } ?>				
				<?php 
					$ce2 = views_get_view_result('connected_advisors', 'block', $account->uid);
					if(!empty($ce2)) { ?>
						<div class="dashpanel" id="connected-advisors">
							<h2>Connected Advisors</h2>
							<?php print views_embed_view('connected_advisors', 'block'); ?>
						</div>
				<?php } ?>
				<?php if(isset($account->field_download['und'][0])): ?>
					<div class="dashpanel" id="document-library">
						<h2>Personal Document Library</h2>
						<?php print views_embed_view('document_library', 'block'); ?>
					</div>		
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		<!-- Provider / Consultant Panels -->
		<?php 
			if($is_pm) {
				$provider_nid = bp_user_report($account->uid, 'nid', 'provider');
				if($provider_nid > 0) {
					if($my) {
						$provider_text .= '<p>Click below to view and edit your Provider page.</p>';
						$provider_users .= '<p>If you want to add or edit Consultants you can do so in the panel below.</p>';
						$provider_link .= '<p><a class="button big navy" href="/node/'.$provider_nid.'">Provider Page</a></p>';
					}
					else {
						$provider_text .= '<p>This Manager\'s Provider page is linked below.</p>';
						$provider_link .= '<p><a class="button big navy" href="/node/'.$provider_nid.'">Provider Page</a></p>';						
					}
				}
				else {
					if($my) {
						$provider_text .= '<p>You have not yet created a Provider page. Click below to get started.</p>';
						$provider_users .= '<p>Once you have created a Provider page you will be able to add Consultants to it.</p>';
						$provider_link .= '<p><a class="button big navy" href="/node/add/provider">Add Provider Page</a></p>';
					}
					else {
						$provider_text .= '<p>This Manager has not yet created a Provider page.</p>';
						$provider_link .= '<p><a class="button big navy" href="/node/add/provider">Add Provider Page</a></p>';						
					}				
				}
			}
		?>
		<?php if($is_pm): ?>
			<?php if($my || $is_admin): ?>
				<div class="dashpanel" id="provider-page">
					<h2>Provider Page</h2>
					<div class="darkbold">
						<?php print $provider_text; ?>
					</div>		
					<div class="subtext">
						<?php print $provider_users; ?>
					</div>
					<?php print $provider_link; ?>			
				</div>
			<?php endif; ?>
			<?php if($my || $is_admin): ?>			
				<?php if($provider_nid > 0): ?>
					<div class="dashpanel" id="provider-consultants">
						<h2>Consultants</h2>
						<?php print views_embed_view('consultants', 'block_1', $provider_nid); ?>
						<p><a class="button big navy" href="/admin/people/create?destination=user/<?php print $account->uid; ?>">Add A Consultant</a></p>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php if($my && $is_consultant): ?>
			<div class="dashpanel" id="connected-orgs">
				<h2>Connected Organisations</h2>	
				<?php print views_embed_view('connected_organisations', 'block', $account->uid); ?>			
			</div>		
		<?php endif; ?>
		<?php if($my && $is_advisor): ?>
			<div class="dashpanel" id="connected-orgs">
				<h2>Advising Organisations:</h2>	
				<?php print views_embed_view('connected_organisations_for_advisors', 'block', $account->uid); ?>			
			</div>		
		<?php endif; ?>			
		<?php if(!$my && !$is_admin && $is_consultant): ?>
			<div class="dashpanel" id="connected-orgs">
				<h2>Connected Organisations</h2>	
				<?php print views_embed_view('connected_organisations', 'block', $account->uid); ?>			
			</div>		
		<?php endif; ?>	
		<?php if(!$my && !$is_consultant && $is_admin): ?>
			<div class="dashpanel" id="connected-orgs">
				<h2>Connected Organisations</h2>	
				<?php print views_embed_view('connected_organisations', 'block', $account->uid); ?>			
			</div>		
		<?php endif; ?>			
	</div><!-- /dashboard -->

</div>
