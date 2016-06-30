<?php

namespace Drupal\notification_plugin\Plugin\NotificationPlugin;

use Drupal\notification_plugin\NotificationPluginBase;

/**
 * Provides a basic form.
 *
 * @ReusableForm(
 *   id = "hello_world",
 *   name = @Translation("Hello World"),
 *   message = "Hello World!"
 * )
 */
class HelloWorld extends NotificationPluginBase {
}
