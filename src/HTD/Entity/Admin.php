<?php

namespace HTD\Entity;

use HTD\Repository\UserInterface;

class Admin implements UserInterface {
  public function getRole() {
    return 'Admin';
  }
}
