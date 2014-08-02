<?php
/**
 * @file
 * partner.features.inc
 */

/**
 * Implements hook_node_info().
 */
function partner_node_info() {
  $items = array(
    'provider' => array(
      'name' => t('Partner'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
