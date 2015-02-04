<?php
namespace Granam\Exceptions;

class LogicTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @expectedException \Granam\Exceptions\Logic
     */
    public function can_be_thrown()
    {
        throw new Logic;
    }

    /**
     * @test
     * @expectedException \LogicException
     */
    public function origins_at_standard_logic_exception()
    {
        throw new Logic;
    }

    /**
     * @test
     * @expectedException \Granam\Exceptions\Exception
     */
    public function is_marked_by_local_interface()
    {
        throw new Logic;
    }

    /** @test */
    public function is_not_runtime()
    {
        $logic = new Logic();
        $this->assertFalse(is_a($logic, '\Granam\Exceptions\Runtime'));
    }
}
