<?php

namespace HTD\Usecase;

use HTD\Entity\Admin;
use HTD\Entity\Couple;
use HTD\Usecase\RemoveCouple;
use HTD\Repository\CoupleRepositoryInterface;

class CustomerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 管理者はカップルを削除できる()
    {
        $operator = new Admin();
        $couple = new Couple();
        $coupleRepos = \Phake::mock(CoupleRepositoryInterface::class);

        $removeCouple = new RemoveCouple($coupleRepos);
        $removeCouple->remove($couple, $operator);
        \Phake::verify($coupleRepos, \Phake::times(1))->remove($couple);
    }

    /**
     * @test
     * @expectedException \Exception
     * @expectedExceptionMessage カップルは管理者のみ削除できます。
     */
    public function カップルはカップルを削除できない()
    {
        $operator = new Couple();
        $couple = new Couple();
        $coupleRepos = \Phake::mock(CoupleRepositoryInterface::class);

        $removeCouple = new RemoveCouple($coupleRepos);
        $removeCouple->remove($couple, $operator);
        \Phake::verify($coupleRepos, \Phake::times(1))->remove($couple);
    }
}
