<?php

/**
 * @file
 * Display Suite 1 column template.
 */


?>
<<?php print $ds_content_wrapper;
print $layout_attributes; ?> class="ds-1col <?php print $classes; ?> clearfix">


<div id="mitarbeitertelefonliste-right-content-wrapper">

    <table>
        <tr>
            <th style="width:8%"><span class="telefonliste-table"><?php print render($content['field_partner_logo']); ?></span></th>
            <th style="width:24%;"><span class="telefonliste-table"><?php print render($content['title']); ?> <?php print render($content['field_mitarbeiter_nachname']); ?></span></th>
            <th style="width:24%"><span class="telefonliste-table"><?php print render($content['field_telefon']); ?></span></th>
            <th style="width:40%"><span class="telefonliste-table"><?php print render($content['field_email']); ?></span></th>
        </tr>


    </table>

</div>

</<?php print $ds_content_wrapper ?>>




<?php if (!empty($drupal_render_children)): ?>
<?php print $drupal_render_children ?>
<?php endif; ?>
