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

<div id="right_content_wrapper">
    <h2><?php print render($content['field_mitarbeiter_vorname']); ?></h2>
  <?php print render($content['field_mitarbeiter_nachname']); ?>
    <div id="id-field-position"><?php print render($content['field_position']); ?></div>
    <div style="padding-bottom: 1em"><?php print render($content['body']); ?></div>

    <div style="padding-bottom: 1em">
        <span style="font-weight: bold">
            <span style="color: #8BB82A"> <?php print render($content['field_mitarbeiter_vorname']); ?></span> kennt sich aus mit: </span><?php print render($content['field_mitarbeiter_spezialgebiete']); ?>
    </div>
    <span style="font-weight: bold"><span style="color: #8BB82A"> <?php print render($content['field_mitarbeiter_vorname']); ?></span> anrufen: </span><?php print render($content['field_mitarbeiter_telefon']); ?>
    <div>
    <span style="font-weight: bold"><span style="color: #8BB82A"> <?php print render($content['field_mitarbeiter_vorname']); ?></span> eine eMail senden: </span><?php print render($content['field_mitarbeiter_email']); ?>
    </div>
</div>

</<?php print $ds_content_wrapper ?>>




<?php if (!empty($drupal_render_children)): ?>
<?php print $drupal_render_children ?>
<?php endif; ?>
