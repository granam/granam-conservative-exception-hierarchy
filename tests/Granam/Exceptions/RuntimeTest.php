<?php
namespace Granam\Exceptions;

class RuntimeTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @expectedException \Granam\Exceptions\Runtime
     */
    public function can_be_thrown()
    {
        throw new Runtime;
    }

    /**
     * @test
     * @expectedException \RuntimeException
     */
    public function origins_at_standard_runtime_exception()
    {
        throw new Runtime;
    }

    /**
     * @test
     * @expectedException \Granam\Exceptions\Exception
     */
    public function is_marked_by_local_interface()
    {
        throw new Runtime;
    }


    /** @test */
    public function is_not_logic()
    {
        $runtime = new Runtime();
        $this->assertFalse(is_a($runtime, '\Granam\Exceptions\Logic'));
    }
}
