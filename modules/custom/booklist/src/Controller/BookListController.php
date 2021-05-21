<?php
namespace Drupal\booklist\Controller;
use Drupal\Core\Controller\ControllerBase;

class BookListController extends ControllerBase {
  public function booklist() {
    return [
      '#markup' => 'Hello, world',
    ];
  }
};

?>
