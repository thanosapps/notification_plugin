<?php
namespace Drupal\notification_plugin;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

class NotificationPluginManager extends DefaultPluginManager {

  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {

    parent::__construct(
      'Plugin/NotificationPlugin',
      $namespaces,
      $module_handler,
      'Drupal\notification_plugin\NotificationPluginInterface',
      'Drupal\notification_plugin\Annotation\NotificationPlugin'
    );

    $this->alterInfo('notification_plugin_info');
    $this->setCacheBackend($cache_backend, 'notification_plugin');
  }
}
