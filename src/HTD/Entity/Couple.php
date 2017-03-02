<?php

namespace HTD\Entity;

use HTD\Repository\UserInterface;

class Couple implements UserInterface {
  public function getRole() {
    return 'Couple';
  }
}
