<?php

namespace HTD\Repository;

use HTD\Entity\Couple;

interface CoupleRepositoryInterface {
    public function remove(Couple $couple);
}
