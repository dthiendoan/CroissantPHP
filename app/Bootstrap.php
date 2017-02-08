<?php

require_once "Front.php";
require_once "Config.php";

use Lib\EntityManager\EntityManager;

class Bootstrap {
  public function boot() {
    $entityManager = EntityManager::getManager();
    $front = new Front();
    $front->run();

  }
}
