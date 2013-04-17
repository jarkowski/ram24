<?php

/**
 * @file
 * Display Suite 1 column template.
 */


?>
<<?php print $ds_content_wrapper;
print $layout_attributes; ?> class="ds-1col <?php print $classes; ?> clearfix">


<div id="mitarbeitertelefonliste_right_content_wrapper">

    <table>
        <tr>
            <th><?php print render($content['field_mitarbeiter_bild']); ?></th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Telefon</th>
            <th>eMail</th>
        </tr>


    </table>

</div>

</<?php print $ds_content_wrapper ?>>




<?php if (!empty($drupal_render_children)): ?>
<?php print $drupal_render_children ?>
<?php endif; ?>
