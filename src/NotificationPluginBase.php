<?php

namespace Drupal\notification_plugin;

use Drupal\Component\Plugin\PluginBase;

class NotificationPluginBase extends PluginBase implements NotificationPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->pluginDefinition['name'];
  }

  /**
   * {@inheritdoc}
   */
  public function getNotification() {
    return $this->pluginDefinition['message'];
  }
}
