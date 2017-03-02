<?php

namespace HTD\Repository;

use HTD\Entity\Couple;
use HTD\Repository\CoupleRepositoryInterface;

class ConcreteCoupleRepository implements CoupleRepositoryInterface {
    private $couple;

    public function remove(Couple $couple) {
        $this->couple = $couple;
    }

    public function getCouple() {
        return $this->couple;
    }
}
