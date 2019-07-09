<?php

namespace Drupal\site_information\Controller;

use Drupal\Core\Controller\ControllerBase;
//use Drupal\Core\Entity\Query\QueryFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Drupal\node\Entity\Node;


/**
 * Defines HelloController class.
 */
class NodeController extends ControllerBase {

    /* protected $entityQuery;

    public function __construct(QueryFactory $entityQuery) {
    $this->entityQuery = $entityQuery;
  }

    public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query')
    );
  } */

  /**
   * 
   *
   * @return array
   *   Return json array.
   */
  public function content() {
    $response = new Response();
    $api_key = \Drupal::config('system.site')->get('site_information_apikey');
    $node = \Drupal::entityTypeManager()->getStorage('node')->load($api_key);
    if (!empty($node) && $node->getType() === 'page' && $api_key == $node->id()) {
       $serializer = \Drupal::service('serializer');
        $node = Node::load($api_key);
        $data = $serializer->serialize($node, 'json', ['plugin_id' => 'entity']);
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    else {
        throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
    }
  }

}