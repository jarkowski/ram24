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
            <th style="width:8%"><?php print render($content['field_mitarbeiter_bild']); ?></th>
            <th style="width:24%">David Jarkowski</th>
            <th style="width:24%">+49 40 308543-13</th>
            <th style="width:40%">r.brodrecht@ram-electronic-gmbh.de</th>
        </tr>


    </table>

</div>

</<?php print $ds_content_wrapper ?>>




<?php if (!empty($drupal_render_children)): ?>
<?php print $drupal_render_children ?>
<?php endif; ?>
