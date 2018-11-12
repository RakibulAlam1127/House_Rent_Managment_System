<?php
  namespace App\Controllers;
  class Controllers{

      public function view($view)
      {
          require_once __DIR__.'/../../views/'.$view.'.php';
      }
  }