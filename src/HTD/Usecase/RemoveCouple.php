<?php

namespace HTD\Usecase;

use HTD\Entity\Couple;
use HTD\Repository\CoupleRepositoryInterface;
use HTD\Repository\UserInterface;

class RemoveCouple {
    public function __construct(CoupleRepositoryInterface $repository) {
      $this->repository = $repository;
    }

    public function remove(Couple $couple, UserInterface $operator) {
        if ($operator->getRole() != 'Admin') {
          throw new \Exception('カップルは管理者のみ削除できます。');
        }

        $this->repository->remove($couple);
    }
}
