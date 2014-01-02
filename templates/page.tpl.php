<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">

    <?php /*if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
        <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
      <nav class="top-bar"<?php print $top_bar_options; ?>>
        <ul class="title-area">
          <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
        </ul>
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
          <?php if ($top_bar_secondary_menu) :?>
            <?php print $top_bar_secondary_menu; ?>
          <?php endif; ?>
        </section>
      </nav>
      <?php if ($top_bar_classes): ?>
        </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; */?>

    <?php //if ($alt_header): ?>
      <section class="row <?php //print $alt_header_classes; ?>">

       <?php if ($logo): ?>
        <div class="large-6 columns logo">      
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
        <?php endif; ?>
       <div class="large-6 columns user_menu">
          <?php print render($page['user_menu']); ?>
          
          <div id="showMobileNav">
          	<span aria-hidden="true" class="icon-menu"></span>
          </div>
          
       </div>
     </section>
      <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name" class="element-invisible">
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

        <?php //endif; ?>


        <?php /*if ($alt_main_menu): ?>
          <nav id="main-menu" class="navigation" role="navigation">
            <?php print ($alt_main_menu); ?>
          </nav> <!-- /#main-menu -->
        <?php endif;*/ ?>



        <?php if ($alt_secondary_menu): ?>
          <nav id="secondary-menu" class="navigation" role="navigation">
            <?php print $alt_secondary_menu; ?>
          </nav> <!-- /#secondary-menu -->
        <?php endif; ?>

      </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->
    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
    
        <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
       
     <?php    /*   <nav class="top-bar large-9 columns"<?php print $top_bar_options; ?>>
        <ul class="title-area">
          <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
        </ul>
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
        
          <?php //if ($top_bar_secondary_menu) :?>
            <?php //print $top_bar_secondary_menu; ?>
          <?php //endif; ?>
        </section>
     </nav> 
   
     <div class="large-3 columns">
         <?php print render($page['search']); ?>
     </div>*/ ?>

      <?php if ($top_bar_classes): ?>

      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <?php if (!empty($page['header'])): ?>


    <div class="header-navigation-and-search">
      <section class="l-header-region row">
          <div class="large-9 columns topnavigation">
            <?php print render($page['header']); ?>
          </div>

        <!--/.l-header-region -->
         <?php endif; ?>
         <div class="large-3 columns">
           <?php print render($page['search']); ?>
         </div>
      </section>
    </div>


  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

	  <div role="main" class="row l-main">
	    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php //if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h3 id="page-title" class="title"><?php print $title; ?></h3>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
      <?php if (isset($tabs['#primary'][0]) && $tabs['#primary'][0]['#link']['title'] == "Vis") {
              $tabs['#primary'][0] =  array();
            }
      ?>
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
    <!--/.l-main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> l-sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> l-sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </div>
  <!--/.l-main-->

  <?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
    <!--.l-footer-->
    <footer class="l-footer panel row" role="contentinfo">
      <?php if (!empty($page['footer_first'])): ?>
        <div id="footer-first" class="large-4 columns">
          <?php print render($page['footer_first']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_middle'])): ?>
        <div id="footer-middle" class="large-4 columns">
          <?php print render($page['footer_middle']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_last'])): ?>
        <div id="footer-last" class="large-4 columns">
          <?php print render($page['footer_last']); ?>
        </div>
      <?php endif; ?>

      <?php if ($site_name) :?>
        <div class="copyright large-12 columns">
          &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
        </div>
      <?php endif; ?>
    </footer>
    <!--/.footer-->
  <?php endif; ?>

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
