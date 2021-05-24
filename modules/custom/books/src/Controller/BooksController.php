<?php

namespace Drupal\books\Controller;

class BooksController {

  public function page() {
    return array(
      '#theme' => 'books_list',
      '#title' => 'Books List',
    );
  }
}

