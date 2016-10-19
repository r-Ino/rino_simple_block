<?php

/**
 * @file
 * Contains \Drupal\rino_simple_block\Plugin\Block\Copyright.
 */

namespace Drupal\rino_simple_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright"),
 *   category = @Translation("Custom")
 * )
 */
class Copyright extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $date = new \DateTime();
    return [
      '#markup' => t('Copyright @year&copy; rIno', [
          '@year' => $date->format('Y'),
      ]),
    ];
  }
}
