<?php

/**
 * @file Drupal settings file template for use on development environments.
 */

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => '${drupal.site.database.database}',
  'username' => '${drupal.site.database.username}',
  'password' => '${drupal.site.database.password}',
  'host' => '${drupal.site.database.host}',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);

$config_directories = array();
$config_directories[CONFIG_SYNC_DIRECTORY] = '${drupal.site.config_sync_directory}';

$settings['hash_salt'] = '${drupal.site.hash_salt}';
$settings['container_yamls'][] = __DIR__ . '/services.build.yml';

$settings['file_public_path'] = '${drupal.site.settings.file_public_path}';
$settings['file_private_path'] = '${drupal.site.settings.file_private_path}';

// Disable CSS and JS aggregation.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Don't chmod the sites subdirectory.
$settings['skip_permissions_hardening'] = TRUE;

// Turn errors up.
$config['system.logging']['error_level'] = 'verbose';
