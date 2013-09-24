<?php
  /**
   * Plugins are described by creating a $plugin array which will be used
   * by the system that includes this file.
   */
  $plugin = array(
    'title' => t('comm-press footer'),
    'description' => t('Pane for the custom comm-press footer'),
    'category' => t('Comm-press'),
    'single' => TRUE,
    'content type' => 'commpress_footer_link',
    'render callback' => 'commpress_footer_link_render',
  );

  /**
   * Output function for the '[content_type]' content type.
   */
function commpress_footer_link_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();

  $commpress_text = variable_get('commpress_footer_link_text', 'comm-press - Ihre Drupal-Agentur in Hamburg');
  $commpress_image_path = drupal_get_path('module', 'commpress_footer_link') . '/images/commpress-logo-74x15.png';
  $commpress_url = variable_get('commpress_footer_link_url', 'http://comm-press.de');
  $commpress_image = theme('image', array('path' => $commpress_image_path, 'alt' => $commpress_text));

  $block->title = "";
  $block->content = '<div id="footer-link-pane">';
  $block->content .= l($commpress_image, $commpress_url, array('attributes' => array('id' => 'footer-link', 'title' => $commpress_text), 'html' => TRUE));
  $block->content .= '</div>';
  return $block;
}

/**
 * Returns an edit form for the custom type.
 */
function commpress_footer_link_content_type_edit_form(&$form, &$form_state) {
  //Reference
}

/**
 * Returns an edit form for the custom type.
 */
function commpress_footer_link_content_type_edit_form_submit(&$form, &$form_state) {
  //Reference
}