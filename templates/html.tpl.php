<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="da"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="da"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="da"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="da"> <!--<![endif]-->


<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>

  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/campo_intra/css/intranet.css" />

  <!--[if lt IE 8]>
      <link rel="stylesheet" type="text/css" href="/sites/all/themes/campo_intra/css/intranet-ie7.css" />
  <![endif]-->

  <!--[if IE 8]>
      <link rel="stylesheet" type="text/css" href="/sites/all/themes/campo_intra/css/intranet-ie8.css" />
  <![endif]-->  
  
  <meta name="mobile-web-app-capable" content="yes" />
  
  <link rel="icon" href="/sites/all/themes/campo_intra/images/favicon.png" type="image/png" />
  <link rel="shortcut icon" sizes="196x196" href="/sites/all/themes/campo_intra/images/icon-196x196.png" />
  <link rel="apple-touch-icon-precomposed" sizes="128x128" href="/sites/all/themes/campo_intra/images/icon-128x128.png" />

  <?php print $scripts; ?>
	
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print _zurb_foundation_add_reveals(); ?>
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
  
  <script src="/sites/all/themes/campo_intra/js/masonry.pkgd.min.js"></script>  
  
  <link rel="stylesheet" type="text/css" media="print" href="/sites/all/themes/campo_intra/css/print.css" />
  
</body>

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

</html>