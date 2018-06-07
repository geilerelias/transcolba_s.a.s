<?php

require '../MiClase.php';

/**
 * Generated by PHPUnit_SkeletonGenerator on 2018-05-02 at 04:16:47.
 */
class MiClaseTest extends PHPUnit_Framework_TestCase {

    /**
     * @var MiClase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new MiClase;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert (1,2,3) == 3.
     *
     * @covers MiClase::numero_mayor
     */
    public function testNumero_mayor() {
        $this->assertEquals(3, $this->object->numero_mayor(1, 2, 3));
    }

    /**
     * Generated from @assert (2,3,1) == 3.
     *
     * @covers MiClase::numero_mayor
     */
    public function testNumero_mayor2() {
        $this->assertEquals(3, $this->object->numero_mayor(2, 3, 1));
    }

    /**
     * Generated from @assert (3,2,1) == 3.
     *
     * @covers MiClase::numero_mayor
     */
    public function testNumero_mayor3() {
        $this->assertEquals(3, $this->object->numero_mayor(3, 2, 1));
    }

    /**
     * Generated from @assert (2,1,3) == 3.
     *
     * @covers MiClase::numero_mayor
     */
    public function testNumero_mayor4() {
        $this->assertEquals(3, $this->object->numero_mayor(2, 1, 3));
    }

}
