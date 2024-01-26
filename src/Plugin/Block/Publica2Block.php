<?php

namespace Drupal\publica2\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Proporciona un bloque para Publicar en varias páginas.
 *
 * @Block(
 *   id = "publica2_block",
 *   admin_label = @Translation("Publica2 Block"),
 *   category = @Translation("Custom")
 * )
 */
class Publica2Block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\publica2\Form\Publica2Form');
    return $form;
  }
}
