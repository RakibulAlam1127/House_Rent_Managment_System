<?php
  namespace App\Controllers\Frontend;
  use App\Controllers\Controllers;

  class LoginController extends Controllers{

      public function getIndex()
      {
         $this->view('login');
      }
  }