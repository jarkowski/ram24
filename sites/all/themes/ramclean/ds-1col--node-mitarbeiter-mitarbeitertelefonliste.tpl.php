<?php

/**
 * @file
 * Display Suite 1 column template.
 */


?>
<<?php print $ds_content_wrapper;
print $layout_attributes; ?> class="ds-1col <?php print $classes; ?> clearfix">




<div id="ma_bild_wrapper">
  <?php print render($content['field_mitarbeiter_bild']); ?>
</div>
  aaa   bbbb   cccc
<div id="right_content_wrapper">

</div>

</<?php print $ds_content_wrapper ?>>




<?php if (!empty($drupal_render_children)): ?>
<?php print $drupal_render_children ?>
<?php endif; ?>
