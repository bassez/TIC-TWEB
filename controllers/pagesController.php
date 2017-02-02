<?php
  class PagesController {
    public function home() {
      require_once ('models/recipe.php');
      $all = Recipe::getAll();
      $hey = new Recipe("coucou", "sylvain", "@@@@");

      var_dump($hey->create());
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
