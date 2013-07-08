<?php

/**
 * @file
 * Definition of Drupal\foobar\Plugin\field\formatter\MailToFormatter.
 */

namespace Drupal\foobar\Plugin\field\formatter;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\field\Plugin\Type\Formatter\FormatterBase;
use Drupal\Core\Entity\EntityInterface;

/**
 * Plugin implementation of the 'foobar' formatter.
 *
 * @Plugin(
 *   id = "foobar",
 *   module = "foobar",
 *   label = @Translation("Foobar"),
 *   field_types = {
 *     "foobar"
 *   }
 * )
 */
class FoobarFormatter extends FormatterBase {

  /**
   * Implements Drupal\field\Plugin\Type\Formatter\FormatterInterface::viewElements().
   */
  public function viewElements(EntityInterface $entity, $langcode, array $items) {
    $elements = array();

    foreach ($items as $delta => $item) {
      $elements[$delta] = array(
        '#type' => 'link',
        '#title' => $item['value'],
        '#href' => 'mailto:' . $item['value'],
      );
    }

    return $elements;
  }

}
