<!--.page -->
<div role="document" class="page">

<header class="l-header" id="user-menu-bar">
	<section class="row">
	   <?php if ($secondary_user): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $secondary_user; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>
	</section>
</header>
  <!--.l-header region -->
  <header role="banner" class="l-header">
    <!-- Title, slogan and menu -->
    <section class="row <?php if (!$top_bar) { print $alt_header_classes; } ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>
	  
	  <?php
		if(isset($page['content']['system_main']['nodes'])) {
			foreach($page['content']['system_main']['nodes'] as $nid=>$node) {
				if(in_array($node['#bundle'], bp_notitle_types(), TRUE)) {
					$title = FALSE;
				}
			}
		}
		?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>
	  
    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
        <div class="large-6 columns siteheader">
          <?php print render($page['header']); ?>
        </div>
      <!--/.l-header-region -->
    <?php endif; ?>
	<!--<div id="mobile-bar"><div id="mobile-logo"><a href="/"><img src="/sites/all/themes/enas/images/enas_e.png" alt="ENAS" /></a></div><div id="mobile-menu-link"><a href="#mobile-menu"><img src="/sites/all/themes/enas/images/mobilemenu.png" alt="Menu" /></a></div></div>-->
    </section>
	<section id="menubar">
    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav id="main-menu" class="top-bar navigation"<?php print $top_bar_options; ?>>
          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
	<?php else: ?>
	    <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>
    <?php endif; ?>
	
	 </section>
    <!-- End title, slogan and menu -->

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>
	  
	  <!-- breadcrumbs were here -->

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second large-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth large-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>
  
<?php if (!empty($page['footer'])): ?>  
  <!--.l-footer-->
  <footer id="fatfooter" class="l-footer panel row" role="contentinfo">
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
  </footer>
  <!--/.footer-->
 <?php endif; ?>   

<?php if (!empty($page['subfooter'])): ?>  
  <!--.l-footer-->
  <footer id="subfooter" class="l-footer panel row" role="contentinfo">
      <div class="footer subfooter large-12 columns">
        <?php print render($page['subfooter']); ?>
      </div>
  </footer>
  <!--/.footer-->
 <?php endif; ?>  

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
