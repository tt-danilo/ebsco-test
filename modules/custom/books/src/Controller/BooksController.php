<?php

namespace Drupal\books\Controller;

class BooksController {

  public function page() {
   $items = array(
    array('name' => 'Article one'),
    array('name' => 'Article two'),
    array('name' => 'Article three'),
    array('name' => 'Article four'),
    array('name' => 'Article 5'),
    array('name' => 'Article 6'),
    array('name' => 'Article 7'),
    array('name' => 'Article 8'),
    array('name' => 'Article 9'),
  );


    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#title' => 'Our article list',
    );
  }
}

