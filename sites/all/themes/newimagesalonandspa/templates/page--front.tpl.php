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

  <li id="content">
    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <div id="services-grid">
      <ul class="top-row">

        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/haircolor.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Color</span></span></a>
        </li>
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/haircutsandstyling.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/aveda_men.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/textureandstraightening.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
      </ul>

      <ul class="bottom-row">
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/hand_and_foot.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/facial.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/signature.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
        <li>
          <img src="<?php print base_path() . path_to_theme(); ?>/images/hairspatreatments.jpg" />
          <a href="hair-color"><span class="service-description"><span>Hair Cut and Styling</span></span></a>
        </li>
      </ul>
    </div>

    <?php print render($page['content']); ?>
    <div id="content-column-left">
      <p>content column left</p>
      <?php print render($page['content_column_left']); ?>
    </div>
    <div id="content-column-right">
      <p>content column right</p>
      <?php print render($page['content_column_right']); ?>
    </div>
  </div>


  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <div id="content-cta">
    <?php print render($page['content_cta']); ?>
    <p>content cta</p>
  </div>

  <div id="footer">
    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
    <?php endif; ?>
  </div>

</div>