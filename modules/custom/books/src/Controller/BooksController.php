<?php

namespace Drupal\books\Controller;

class BooksController {

  public function page() {
    return array(
      '#theme' => 'article_list',
      '#title' => 'Our article list',
    );
  }
}

