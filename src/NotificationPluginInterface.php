<?php

namespace Drupal\notification_plugin;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;

interface NotificationPluginInterface extends PluginInspectionInterface, ContainerFactoryPluginInterface {

  /**
   * Return the name of the notification plugin.
   *
   * @return string
   */
  public function getName();

  /**
   * Shows the notification of the plugin.
   */
  public function showNotification();
}
