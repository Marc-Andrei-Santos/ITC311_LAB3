<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BookController extends BaseController
{
  private $book;
  public function __construct()
  {
    $this->book = new \App\Models\BookModel();
  }

  public function home()
  {
    $data = [
      'booktable' => $this->book->findAll()
    ];
    return view('index', $data);
  }
}