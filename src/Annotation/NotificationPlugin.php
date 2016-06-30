<?php

namespace Drupal\notification_plugin\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a notification plugin annotation object.
 *
 * @Annotation
 */
class NotificationPlugin extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The name of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $name;

  /**
   * The message that is displayed with this plugin.
   *
   * It must implement \Drupal\notification_plugin\Form\NotificationPluginInterface.
   *
   * @var string
   */
  public $message;
}
