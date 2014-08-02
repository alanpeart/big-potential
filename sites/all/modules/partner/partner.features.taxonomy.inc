<?php
/**
 * @file
 * partner.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function partner_taxonomy_default_vocabularies() {
  return array(
    'provider_services' => array(
      'name' => 'Provider Services',
      'machine_name' => 'provider_services',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
