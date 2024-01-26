<?php
namespace Drupal\publica2\Controller;

use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Exception\RequestException;

class Publica2Controller extends ControllerBase {

  public function obtenerFormularioExterno() {
    $client = \Drupal::httpClient();
    $url = 'https://tuteanuncias.com/listing-form/';

    try {
      $response = $client->request('GET', $url);
      $contents = (string) $response->getBody();

      // Utiliza una expresión regular para extraer el formulario
      $pattern = '/<form.*?>(.*?)<\/form>/s';
      preg_match($pattern, $contents, $matches);
      $formulario = $matches[0] ?? 'Formulario no encontrado.';

    } catch (RequestException $e) {
      $formulario = "No se pudo cargar el contenido.";
    }

    return [
      '#type' => 'markup',
      '#markup' => $formulario,
    ];
  }
}
