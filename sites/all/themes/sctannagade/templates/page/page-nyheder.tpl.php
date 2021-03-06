<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
      
<body class="<?php print $section_class; print $body_classes; if (!empty($admin)) print ' admin' ?>">
  <?php if (!empty($admin)) print $admin; ?>
  <?php if (empty($admin)) { ?>
  <div id="aak-topbar">
    <div id="aak-topbar-inner">
      <a href="http://www.aarhuskommune.dk/">Til www.aarhuskommune.dk</a>
    </div>
  </div>
  <?php } ?>
	<div id="container" class="<?php print $classes; ?>">
		<div id="container-inner">
			<h1 id="site-name"><a href="<?php print $front_page; ?>"></a></h1>
			<div id="container-top">
				<?php print $search; ?><?php print theme('links', $secondary_links); ?>
			</div>

			<div id="banner">
			  <?php print $flashbanner; ?>
                        </div>
			<div id="regions"><?php print theme('links', $primary_links); ?></div>
		</div>
		<div id="container-content">

			<div id="content" class="content row nested">

				<div id="content-inner" class="content-top-inner inner">
          <?php if ($tabs): ?>
            <div class="local-tasks"><div class="clear-block">
              <?php print $tabs; ?>
            </div></div>
          <?php endif; ?>
         <?php print $messages; ?>

	 <h2><?php print t('News from Sct. Annagade'); ?></h2>
	 <?php print $content_top; ?>
          <div class="content-news">
	   <?php if ($current_month): ?>
           <div class="current-month">
	     <?php print $current_month; ?>
           </div><div class="kugler2"></div></div>
         <?php endif; ?>
                            	<?php print $content; ?>
                         	</div><!-- /content-inner -->
				
                     </div><!-- /content -->

			<div id="sidebar">

			<?php if ($left): ?>
				<div id="sidebar-left" class="section sidebar region">
				<?php print $left; ?>
				</div> <!-- /sidebar-left -->
			<?php endif; ?>

			<?php if ($right): ?>
				<div id="sidebar-right" class="section sidebar region">
				<?php print $right; ?>
				</div> <!-- /sidebar-right -->
			<?php endif; ?>

			</div>

		</div>
		<div id="container-banners">
			<div id="banners"> 
				<?php print $banners; ?>
			</div>
		</div>
	</div>

        <div id="footer">
                Fritidscenter Sct. Annagade, Sct. Annagade 38-40, 8000 &Aring;rhus C.
                <?php print $footer; ?><?php print $footer_message; ?><br /><br />
                <?php print $feed_icons; ?>
        </div>

<?php print $closure ?>

</body>
</html>
