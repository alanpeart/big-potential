<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>">
  <head>
    <?php print $head; ?>
    <base href='<?php print $url ?>' />
    <title><?php print $print_title; ?></title>
    <?php print $scripts; ?>
    <?php if (isset($sendtoprinter)) print $sendtoprinter; ?>
    <?php print $robots_meta; ?>
    <?php if (theme_get_setting('toggle_favicon')): ?>
      <link rel='shortcut icon' href='<?php print theme_get_setting('favicon') ?>' type='image/x-icon' />
    <?php endif; ?>
    <?php print $css; ?>
	<?php global $base_url; ?>
	<style>
			/** FUNDING APPLICATION FORM (NEW) **/
			
		.block-block-12	h1.page-title {
			text-align: center;
			background-color: #fafafa;
			padding: 8px;
			margin: 10px 0 10px 0;
			float: left;
			clear: left;
			width: 100%;
		}
		.node-application-form h2.multipage-pane-title {
			font-size: 24px;
		}
		.node-application-form .field-type-list-boolean > .form-item label {
			color: #000;
			font-size: 18px;
			font-weight: 600;
			line-height: 1.5;
			margin-left: 30px;
		}
		.node-application-form .field-type-list-boolean .form-type-checkbox .icheckbox_square {

		}
		.page-node-add-application .selectBox-dropdown-menu,
		.node-type-application .selectBox-dropdown-menu {
			background: none repeat scroll 0 0 #f1f1f1;
			border: 1px solid #b2b2b2;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
			max-height: 300px;
			min-height: 1em;
			overflow: auto;
			position: absolute;
			width: auto !important;
			min-width: 200px !important;
			z-index: 99999;
		}
		.node-application-form textarea {
			height: 350px;
		}
		.node-application-form .form-item-field-field-ap-impact-und-0-value textarea,
		.node-application-form .form-item-field-ap-invest-readiness-desc-und-0-value textarea,
		.node-application-form .form-item-field-ap-invest-ready-plan-und-0-value textarea {
			height: 500px;
		}
		.node-application-form .form-item-field-ap-fin-perf-clarify-und-0-value textarea,
		.node-application-form .form-item-field-ap-provider-choice-und-0-value textarea,
		.node-application-form .form-item-field-ap-able-contribute-und-0-value textarea {
			height: 200px;
		}
		.node-application-form .form-item-field-ap-success-fee-und-0-value textarea {
			height: 120px;
		}

		.node-application .article-inner {
			float: left;
			width: 100%;
			background-color: #f1f1f1;
			padding: 15px;
		}
		.node-application .panel {
			float: left;
			width: 100%;
			clear: left;
		}
		.node-application .panel.white {
			background-color: #fff;
		}
		.node-application .field-group-div > h3 {
			color: #328bf6;
			font-size: 18px;
			font-weight: 600;
			line-height: 1.3;
			margin-bottom: 12px;
			padding: 0 18px;
		}
		.node-application .field {
			padding-top: 15px;
			padding-bottom: 15px;
		}
		.node-application .field .field-label {
			font-weight: 600;
			margin-bottom: 4px;
		}
		.node-application .field-type-list-boolean {
			margin-bottom: 0px;
			padding-left: 0px;
			padding-right: 0px;
		}
		.node-application .field-type-text-long {
			line-height: 1.5;
			font-size: 15px;
		}
		.node-application .field-type-text-long .field-label {
			font-size: 16px;
		}
		.node-application h2.page-title {
			font-size: 28px;
			color: #328bf6;
			margin-bottom: 24px;	
		}
		.node-application .field-type-datetime {
			padding-left: 0px;
			padding-right: 0px;
			margin-bottom: 0px;
		}
		.node-application .field-type-field-collection .field-type-datetime {
			background-color: transparent;
		}
		.field-type-field-collection table {
			width: 100%;
		}
		.node-application .panel.outline {
			border: 1px solid #f1f1f1;
			background-color: transparent;
		}
		.node-application .vcard {
			border: 0 none;
			color: #6a6a69;
			font-family: "proxima-nova","proxima-nova",Arial,Helvetica,sans-serif;
			font-size: 16px;
			margin-bottom: 0;
			padding: 0;
		}
		.term-reference {
			display: inline-block;
			background-color: #eef6fe;
			color: #0c233e;
			font-weight: 400;
			padding: 3px 8px;
			text-transform: capitalize;
			margin-right: 8px;
			margin-top: 8px;
			font-size: 13px;
		}

		label.unattached {
			color: #0c233e;
			font-size: 18px;
			font-weight: 700;
			line-height: 1.2;
			margin-bottom: 18px;
			display: block;
		}
		.field-type-markup ul {
			margin-left: 30px;
		}
		#edit-field-ap-choose-stage,
		#edit-field-milestones-intro,
		#edit-field-ap-budget-intro {
			background-color: #fff;
			margin-bottom: 0px;
		}
		.node-application-form .multipage-pane-wrapper > .required-fields {
			background-color: #fff;
			box-sizing: border-box;
			margin-bottom: 15px;
			padding: 15px;
			width: 100%;
			float: left;
			clear: left;
		}
		.node-application-form .multipage-pane-wrapper > .required-fields > .form-wrapper {
			background-color: #fff;
			box-sizing: border-box;
			margin-bottom: 15px;
			padding: 15px;
			width: 100%;
			float: left;
			clear: left;
		}
		.button.pink {
			background-color: #b64caa;
			color: #f9e1f6;
		}
		.button.pink:hover {
			background-color: #82357a;
			text-decoration: none;
		}
		#edit-field-ap-financial-performance .button.pink {
			margin-bottom: 0px;
		}
		.node-application-form .form-type-date-popup .description {
			display: none;
		}
		#edit-field-ap-how-much-investment {
			margin-bottom: 0px;
		}
		#edit-field-ap-list-grants .tabledrag-toggle-weight-wrapper {
			display: none;
		}
		table.field-multiple-table {
			width: 100%;
		}

		table.field-multiple-table tbody {
			border-top: 0px;
		}
		.field-multiple-table button {
			font-size: 11px !important;
			padding: 4px 8px;
		}
		.field-multiple-table .field-type-datetime fieldset legend {
			display: none;
		}
		.field-multiple-table .field-type-datetime fieldset div {
			margin: 0;
			padding: 0;
		}
		.field-multiple-table .field-type-datetime fieldset div input {
			margin: 0;
		}
		.field-multiple-table .field-type-datetime {
			margin: 0;
			padding: 0;
		}
		.field-multiple-table input[type="text"] {
			font-size: 13px;
		}
		table.field-multiple-table th:first-child {
			padding-right: 0;
			padding-left: 5px;
			width: 20px;
		}
		#edit-field-ap-list-grants table.field-multiple-table th:first-child label {
			display: none;
		}
		#edit-field-ap-list-grants table.field-multiple-table th:nth-child(4) {
			width: 75px;
			max-width: 75px !important;
		}
		.multipage-pane-wrapper .field-multiple-table .form-wrapper {
			background-color: #EEEEEE;
		}
		table.field-multiple-table td {
			padding-top: 0px;
			padding-bottom: 0px;
		}
		a.tabledrag-handle .handle {
			width: 25px;
			height: 25px;
		}
		form .field-multiple-table td.field-multiple-drag a.tabledrag-handle {
			padding-right: 0px;
		}
		.field-multiple-table thead th label {
			font-weight: 600;
			font-size: 15px;
		}
		form .field-multiple-table th.field-label {
			padding-left: 10px;
			border-bottom: 1px solid #ccc;
			font-weight: 600;
			font-size: 14px;	
		}
		button.field-add-more-submit {
			padding: 8px 16px;
		}
		.required-fields > h3 {
			color: #0c233e;
			font-size: 18px;
			font-weight: 700;
			line-height: 1.2;
			margin-bottom: 18px;
		}
		.required-fields .form-item label {
			font-size: 16px;
			font-weight: 600;
		}
		#edit-field-when-do-you-hope-to-raise- fieldset .fieldset-wrapper div,
		#edit-field-when-do-you-hope-to-raise- fieldset .fieldset-wrapper input {
			margin-bottom: 0;
			padding-bottom: 0;
		}
		.field-group-div .description {
			background-color: #ddedfd;
			color: #575756;
			font-size: 14px;
			line-height: 1.5;
			padding: 15px;
			margin: 0 15px 15px 15px;
		}
		.node-application-form .multipage-pane-wrapper > .group-ap-budget-summary > .form-wrapper,
		.node-application-form .multipage-pane-wrapper > .group-ap-about-org > .form-wrapper,
		.node-application-form .multipage-pane-wrapper > .group-ap-main-contact > .form-wrapper {
			padding-bottom: 0px;
		}
		.panel.white {
			background-color: #fff;
		}
		button, a.button, a.flag, #buttons {
			display: none;
		}
		.panel {
			background: none repeat scroll 0 0 #f2f2f2;
			border-color: #d8d8d8;
			border-style: solid;
			border-width: 1px;
			margin-bottom: 1.25rem;
			padding: 1.25rem;
		}
		.field-collection-container table th, .field-collection-container table td {
			text-align: left;
		}
	</style>
  </head>
  <body>
    <?php if (!empty($message)): ?>
      <div class="print-message"><?php print $message; ?></div><p />
    <?php endif; ?>
    <?php if ($print_logo): ?>
      <div class="print-logo"><?php print $print_logo; ?></div>
    <?php endif; ?>
    <div class="print-site_name"><?php print theme('print_published'); ?></div>
    <p />
    <hr class="print-hr" />

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> printer-friendly pdf"<?php print $attributes; ?>>
	<div class="article-inner">
	<h2 class="page-title"><?php print $node->title; ?></h2>

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
	<?php print render($content); ?>
	
	</div><!-- /article-inner -->
	<div class="panel white">
		<p>This report was generated by the Big Potential website.</p>
		<div class="print-footer"><?php print theme('print_footer'); ?></div>
		<hr class="print-hr" />
		<?php if ($sourceurl_enabled): ?>
		  <div class="print-source_url">
			<?php print theme('print_sourceurl', array('url' => $source_url, 'node' => $node, 'cid' => $cid)); ?>
		  </div>
		<?php endif; ?>
		<div class="print-links"><?php print theme('print_url_list'); ?></div>
	</div>
</article>
    <?php print $footer_scripts; ?>
  </body>
</html>