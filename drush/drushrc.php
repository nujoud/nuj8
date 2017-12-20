<?php

/**
 * Load additional drushrc.php files
 */
if (file_exists(__DIR__ . '/contrib/drush-shell-aliases/drushrc.php')) {
    include __DIR__ . '/contrib/drush-shell-aliases/drushrc.php';
  }

  $command_specific['config-export']['skip-modules'] = ['yaml_editor'];
  $command_specific['config-import']['skip-modules'] = ['yaml_editor'];