<?php

/**
 * @file
 * Display Suite 1 column template.
 */

dpm($variables);
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">




<div id="ma_bild_wrapper">
 <?php print render($content['field_mitarbeiter_bild']); ?>
</div>

<div id="right_content_wrapper">
<?php print render($content['field_mitarbeiter_vorname']); ?>
<?php print render($content['field_mitarbeiter_nachname']); ?>
<?php print render($content['field_position']); ?>
<?php print render($content['body']); ?>
<?php print render($content['field_mitarbeiter_spezialgebiete']); ?>
<?php print render($content['field_mitarbeiter_telefon']); ?>
<?php print render($content['field_mitarbeiter_email']); ?>
</div>

</<?php print $ds_content_wrapper ?>>




<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
