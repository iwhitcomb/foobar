<?php

/**
 * @file
 * Contains \Drupal\foobar\Plugin\Block\FoobarBlock.
 */

namespace Drupal\foobar\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a 'Foobar' block.
 *
 * @Block(
 *   id = "foobar_foobar_block",
 *   admin_label = @Translation("Foobar"),
 *   module = "foobar"
 * )
 */
class FoobarBlock extends BlockBase {

  /**
   * Overrides \Drupal\block\BlockBase::settings().
   */
  public function settings() {
    return array(
      'block_count' => 10,
    );
  }

  /**
   * Overrides \Drupal\block\BlockBase::access().
   */
  public function access() {
    return user_access('access content');
  }

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  protected function blockBuild() {
    return array(
      '#markup' => t('This is an example of how to create blocks for Drupal 8.'),
    );
  }

}
