<?php
/**
 * @file
 * Contains \Drupal\foobar\Controller\FoobarController.
 */

namespace Drupal\foobar\Controller;

use Drupal\Core\ControllerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller routines for foobar routes.
 */
class FoobarController implements ControllerInterface {

  /**
   * Stores the module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs a \Drupal\foobar\Controller\FoobarController object.
   *
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct(ModuleHandlerInterface $module_handler) {
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  /**
   * Prints a page listing a glossary of Drupal terminology.
   *
   * @return string
   *   An HTML string representing the contents of the foobar page.
   */
  public function foobarPage() {
		return array(
			'#markup' => t('This is the demo foobar page.'),
		);
  }

}
