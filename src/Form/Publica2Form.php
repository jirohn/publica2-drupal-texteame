<?php

namespace Drupal\publica2\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class Publica2Form extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'publica2_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Lista de páginas para publicar
    $options = [
      'tuteanuncias' => $this->t('TuTeAnuncias.com'),
      'vipscort' => $this->t('VipScort.es'),
      'destacamos' => $this->t('Destacamos.net'),
      'loquosex' => $this->t('Loquosex.com'),
    ];

    // Casillas de verificación para las páginas
    $form['pages'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Páginas para publicar'),
      '#options' => $options,
      '#description' => $this->t('Selecciona las páginas en las que deseas publicar.'),
    ];

    // Añadir identificadores únicos a cada checkbox
    foreach ($options as $key => $value) {
      $form['pages'][$key] = [
        '#type' => 'checkbox',
        '#title' => $value,
        '#attributes' => ['id' => 'publica2-checkbox-' . $key],
      ];
    }

    // Botón de envío con identificador único
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Publicar'),
      '#attributes' => ['id' => 'publica2-submit-button'],
    ];

    // Agregar el iframe al formulario directamente
      


    $form['contenedor_formulario_externo'] = [
        '#type' => 'container',
        '#attributes' => ['id' => 'contenedor-formulario-externo', 'style' => 'display: none;'],
      ];
      
     

      $form['load_data'] = [
        '#type' => 'button',
        '#value' => $this->t('Insertar datos'),
        '#attributes' => ['id' => 'load-data-button', 'style' => 'display:none;'],
      ];  

    $form['#attached']['library'][] = 'publica2/publica2-scripts';

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Manejar la lógica de envío aquí.
  }
}
