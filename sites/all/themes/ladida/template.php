<?php

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function ladida_breadcrumb($breadcrumb) {
  return;
}

/**
 * Implementation of template_preprocess_node.
 */
function ladida_preprocess_node(&$variables) {
  $node = $variables['node'];
  $inside_nid = 10;

  // node-type specific
  switch ($node->type) {
    case 'node_gallery_gallery':
      $variables['submitted'] = FALSE;
      break;
  }

  if ($node->nid == 1) {
    $photo = theme('image', drupal_get_path('theme', 'ladida') . '/images/store-photo.png', 'The Store', 'The Store', array('class' => 'store-photo'));
    $btn_come_inside = l( t('Come inside and look around.'), 'node/' . $inside_nid, array('attributes' => array('class' => 'btn-come-inside')));
    $btn_red_couch = l( t('Read our blog: Tales from the Red Couch'), 'node', array('attributes' => array('class' => 'btn-red-couch')));

    $variables['content'] = $photo . $btn_come_inside . $variables['content'] . $btn_red_couch;
  }

}