<?php

namespace Drupal\notification_plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

interface NotificationPluginInterface extends PluginInspectionInterface {

  /**
   * Return the name of the notification plugin.
   *
   * @return string
   */
  public function getName();

  /**
   * Get the notification of the plugin.
   */
  public function getNotification();
}
