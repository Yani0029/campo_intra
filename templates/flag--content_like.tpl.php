<?php

/**
 * @file
 * Default theme implementation to display a flag link, and a message after the action
 * is carried out.
 *
 * Available variables:
 *
 * - $flag: The flag object itself. You will only need to use it when the
 *   following variables don't suffice.
 * - $flag_name_css: The flag name, with all "_" replaced with "-". For use in 'class'
 *   attributes.
 * - $flag_classes: A space-separated list of CSS classes that should be applied to the link.
 *
 * - $action: The action the link is about to carry out, either "flag" or "unflag".
 * - $status: The status of the item; either "flagged" or "unflagged".
 *
 * - $link_href: The URL for the flag link.
 * - $link_text: The text to show for the link.
 * - $link_title: The title attribute for the link.
 *
 * - $message_text: The long message to show after a flag action has been carried out.
 * - $message_classes: A space-separated list of CSS classes that should be applied to
 *   the message.
 * - $after_flagging: This template is called for the link both before and after being
 *   flagged. If displaying to the user immediately after flagging, this value
 *   will be boolean TRUE. This is usually used in conjunction with immedate
 *   JavaScript-based toggling of flags.
 * - $needs_wrapping_element: Determines whether the flag displays a wrapping
 *   HTML DIV element.
 *
 * Template suggestions available, listed from the most specific template to
 * the least. Drupal will use the most specific template it finds:
 * - flag--name.tpl.php
 * - flag--link-type.tpl.php
 *
 * NOTE: This template spaces out the <span> tags for clarity only. When doing some
 * advanced theming you may have to remove all the whitespace.
 */
?>
<?php if ($needs_wrapping_element): ?>
  <div class="flag-outer flag-outer-<?php print $flag_name_css; ?>">
<?php endif; ?>
<div class="<?php print $flag_wrapper_classes; ?>">
  <?php if ($link_href): ?>
    <a href="<?php print $link_href; ?>" title="<?php print $link_title; ?>" class="<?php print $flag_classes ?>" rel="nofollow"><?php print $link_title; ?></a>
    <div class = "like-numbers">
   <a href="/flag/flag/content-like/<?php print $variables['entity_id'];?>">
<?php /*
     <a href ='/flag/flag/content-like/<?php print $variables['entity_id']; ?>' id = 'content-likelist' class="popup"> 
       $enid =$variables['entity_id'];
       $attr = array('view' => 'wholikes','args'=>$enid,'display' => 'page_2');/popup($attr);
    onclick="return !window.open(this.href, 'Google', 'width=500,height=500')"
    target="_blank">
   */ ?>
      <?php if ( $flag->get_count($variables['entity_id']) > 0) print $flag->get_count($variables['entity_id']); ?>
     </a>
    </div>

  <?php else: ?>
    <div class="<?php print $flag_classes ?>"><?php print $link_text; ?>
    <div class = "like-numbers">
        <?php if ( $flag->get_count($variables['entity_id']) > 0) print $flag->get_count($variables['entity_id']); ?>
    </div>

    </div>
  <?php endif; ?>
  <?php if ($after_flagging): ?>
    <span class="<?php print $message_classes; ?>">
      <?php print $message_text; ?>
    </span>
  <?php endif; ?>
</div>
<?php if ($needs_wrapping_element): ?>
  </div>
<?php endif; ?>
