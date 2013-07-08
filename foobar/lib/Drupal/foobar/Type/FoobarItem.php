<?php

/**
 * @file
 * Contains \Drupal\email\Type\EmailItem.
 */

namespace Drupal\foobar\Type;

use Drupal\Core\Entity\Field\FieldItemBase;

/**
 * Defines the 'foobar' entity field item.
 */
class FoobarItem extends FieldItemBase {

  /**
   * Definitions of the contained properties.
   *
   * @see EmailItem::getPropertyDefinitions()
   *
   * @var array
   */
  static $propertyDefinitions;

  /**
   * Implements ComplexDataInterface::getPropertyDefinitions().
   */
  public function getPropertyDefinitions() {

    if (!isset(static::$propertyDefinitions)) {
      static::$propertyDefinitions['value'] = array(
        'type' => 'foobar',
        'label' => t('Foobar value'),
      );
    }
    return static::$propertyDefinitions;
  }
}
