<?php
namespace Granam\Exceptions;

class LogicTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @expectedException \Granam\Exceptions\LogicException
     */
    public function can_be_thrown()
    {
        throw new LogicException;
    }

    /**
     * @test
     * @expectedException \LogicException
     */
    public function origins_at_standard_logic_exception()
    {
        throw new LogicException;
    }

    /**
     * @test
     * @expectedException \Granam\Exceptions\Exception
     */
    public function is_marked_by_local_interface()
    {
        throw new LogicException;
    }

    /** @test */
    public function is_not_runtime()
    {
        $logic = new LogicException();
        $this->assertFalse(is_a($logic, '\Granam\Exceptions\RuntimeException'));
    }
}
