<div id="wrapper">

  <div id="header">
    <a href="<?php print $front_page;?>">
      <img src="/<?php print $directory;?>/images/logo.png" alt="<?php print $site_name;?>" height="80" width="150" />
    </a>

    <div id="main-menu">
      <?php print render($page['main_menu']); ?>
    </div>

  </div>

  <div id="aveda-header">
    <p>Make a reservation at <a href="tel:250-768-9554">250.768.9554</a> or schedule online. | Interested in Spa Retreat Parties? Click here.</p>
    <img src="<?php print base_path() . path_to_theme(); ?>/images/aveda_logo.jpg"/>
  </div>

  <div id="content">
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($messages); ?>
    <?php print render($page['content']); ?>
  </div>
  <div id="content-column-left">
    <?php print render($page['content_column_left']); ?>
  </div>
  <div id="content-column-right">
    <?php print render($page['content_column_right']); ?>
  </div>


  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <div id="content-cta">
    <?php print render($page['content_cta']); ?>
  </div>

  <div id="footer">
    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
    <?php endif; ?>
  </div>

</div>