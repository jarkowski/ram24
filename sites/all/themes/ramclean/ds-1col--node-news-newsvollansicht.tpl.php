<?php

/**
 * Template fuer /News
 */
// dpm($variables);

?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

<?php if (isset($title_suffix['contextual_links'])): ?>
<?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>


<?php print render($content['title']); ?>
<span class="author-and-date">
<?php print render($variables['author_and_date']); ?>
</span>
<?php hide($content['title']); ?>

<?php hide($content['author']); ?>
<?php hide($content['post_date']); ?>
<?php print render($content); ?>



</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
<?php print $drupal_render_children ?>
<?php endif; ?>
