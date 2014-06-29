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
	
<script type="text/javascript" src="//www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load('visualization', '1', {packages: ['corechart']});
</script>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> printer-friendly pdf"<?php print $attributes; ?>>
	<?php global $user; ?>
	<div id="diagnostic-summary" class="panel white">
		<h3>Report Summary</h3>
		<!--<?php // print drupal_render($content['field_address']); ?>-->
		<div class="field field-type-text field-label-inline clearfix field-wrapper">
			<?php print $node->field_org_company_name['und'][0]['value']; ?>		
		</div>
		<span class="summary-label">Assessment completed by:</span> <?php print $node->field_name_role['und'][0]['value']; ?>
		<p>This report provides an initial summary of the  investment readiness of the organisation. There are five building blocks of investment readiness and these are shown in the diagram below. Governance & Leadership and Market Potential are the "pillars" upon which the other blocks rest.</p>		
	</div>
	<?php $areas = bp_diagnostic_aggregates_summary_display($node); ?>
	<div id="diagnostic-bridge" class="panel white">	
	<?php
		$charts=array();
		$i=0; $totalScore = 0; $totalMax = 0;
		foreach($areas as $id=>$values) {
			$totalScore += $values['score'];
			$totalMax += $values['max'];
			// $charts[$values['title']]['chart'] = '<div id="diagnostic-chart-' . $i .'" class="little-chart">' . bp_diagnostic_pie_chart('diagnostic-chart-'.$i, $values['title'].' ('.$values['perc'].'%)', '#3C3C3B', array('Score'=>$values['perc'], 100), 200, 200) . '</div>';
			$charts[$values['title']]['perc'] = $values['perc'];
			$i++;
		}
		$overall = round(($totalScore / $totalMax) * 100, 0);	
	?>
		<div id="bridge-diagram">
			<div id="financial-performance-block" class="bridge-block one">
				<div class="fill" style="height: <?php print $charts['Financial Performance']['perc']; ?>%;">&nbsp;</div>
			</div>
			<div id="quality-impact-block" class="bridge-block two">
				<div class="fill" style="height: <?php print $charts['Quality & Impact']['perc']; ?>%;">&nbsp;</div>
			</div>
			<div id="financial-control-block" class="bridge-block three">
				<div class="fill" style="height: <?php print $charts['Financial Control']['perc']; ?>%;">&nbsp;</div>
			</div>
			<div id="governance-leadership-block" class="bridge-block four">
				<div class="fill" style="height: <?php print $charts['Governance & Leadership']['perc']; ?>%;">&nbsp;</div>
			</div>
			<div id="troll-block" class="bridge-block five blank">
			</div>
			<div id="market-potential-block" class="bridge-block six">
				<div class="fill" style="height: <?php print $charts['Market Potential']['perc']; ?>%;">&nbsp;</div>
			</div>			
		</div>
		<div class="clearfix spacer"></div>
		<div id="bridge-figures">
			<div id="bridge-legend">
				<table>
					<tr class="fin-perf">
						<td class="square"><div class="square-tint">&nbsp;</div></td>
						<td class="title">Financial Performance</td>
						<td class="perc"><?php print $charts['Financial Performance']['perc']; ?>%</td>
					</tr>
					<tr class="qual-imp">
						<td class="square"><div class="square-tint">&nbsp;</div></td>
						<td class="title">Quality & Impact</td>
						<td class="perc"><?php print $charts['Quality & Impact']['perc']; ?>%</td>
					</tr>
					<tr class="fin-cont">
						<td class="square"><div class="square-tint">&nbsp;</div></td>
						<td class="title">Financial Control</td>
						<td class="perc"><?php print $charts['Financial Control']['perc']; ?>%</td>
					</tr>					
					<tr class="gov-lead">
						<td class="square"><div class="square-tint">&nbsp;</div></td>
						<td class="title">Governance & Leadership</td>
						<td class="perc"><?php print $charts['Governance & Leadership']['perc']; ?>%</td>
					</tr>					
					<tr class="mark-pot">
						<td class="square"><div class="square-tint">&nbsp;</div></td>
						<td class="title">Market Potential</td>
						<td class="perc"><?php print $charts['Market Potential']['perc']; ?>%</td>
					</tr>					
				</table>
			</div>
			<div id="overall-score">
				<div class="overall-score-big"><?php print $overall; ?><span class="smaller-perc">%</span></div>
				<div class="overall-title">Overall Score</div>
			</div>
		</div>
	</div>
	<div class="print-page-break">&nbsp;</div>
<?php
	$colours = array('governance-leadership'=>'#F9C32B', 'marketpotential'=>'#DD4C2C', 'financialcontrol'=>'#00A173', 'financialperformance'=>'#2668B9', 'quality-impact'=>'#DD43CE');
?>
	<div id="areas-detail" class="panel white">
		<?php 
			foreach($areas as $id=>$values) { ?>
				<div class="area-all <?php print $values['class']; ?>">
					<div class="area-chart-individual">
						<div class="chart-overlay-contain">
							<?php print bp_diagnostic_pie_chart('area-chart-'.$id, '', $colours[$values['class']], array('Score'=>$values['perc'], 'Remainder'=>(100-$values['perc'])), 200, 200); ?>
							<div id="area-chart-<?php print $id; ?>" class="big-chart">						
							</div>	
							<div class="area-chart-overlay">
								<div class="area-score-big"><?php print $values['perc']; ?><span class="area-smaller-perc">%</span></div>	
							</div>
						</div>
					</div>	
					<div class="area-text">
						<h3><?php print $values['title']; ?></h3>
						<div class="area-description"><?php print bp_lexicon($values['body']); ?></div>
						<div class="area-message"><?php print bp_lexicon($values['msg']); ?></div>
					</div>
				</div>
			<?php }
		?>
	</div>
	<div class="print-page-break">&nbsp;</div>
	<div id="weakest" class="panel white">
		<p>Listed below are some questions that based on your answers you may wish to review as a priority as they are the five that will make the most difference in your score. They are shown in order of the weakest score first.</p>
		<ul>
		<?php
			$weakest = bp_diagnostic_aggregates_weakest_5($node->nid);
			foreach($weakest as $item) {
				print '<li>'.$item['label'].'</li>';
			}
		?>
		</ul>
	</div>

	<p>This report was generated by the Big Potential Diagnostic Tool.</p>
    <div class="print-footer"><?php print theme('print_footer'); ?></div>
    <hr class="print-hr" />
    <?php if ($sourceurl_enabled): ?>
      <div class="print-source_url">
        <?php print theme('print_sourceurl', array('url' => $source_url, 'node' => $node, 'cid' => $cid)); ?>
      </div>
    <?php endif; ?>
    <div class="print-links"><?php print theme('print_url_list'); ?></div>
</article>
    <?php print $footer_scripts; ?>
  </body>
</html>