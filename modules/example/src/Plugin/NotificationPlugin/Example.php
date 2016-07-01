<?php

namespace Drupal\example\Plugin\NotificationPlugin;
use Drupal\notification_plugin\NotificationPluginBase;


/**
 * Provides a notification plugin.
 *
 * @NotificationPlugin(
 *   id = "example",
 *   name = @Translation("Example"),
 *   message = "Hello drupal camp!"
 * )
 */
class Example extends NotificationPluginBase {
}
