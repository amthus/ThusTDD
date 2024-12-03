<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Exo1;

class exo1Test extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    
    protected $exo1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exo1 = new Exo1(); 
    }

    public function testDireBonjour()
    {
        $this->assertEquals("Bonjour, Monde !", $this->exo1->direBonjour());
    }

    public function testAddition()
    {
        $this->assertEquals(5, $this->exo1->addition(2, 3));
        $this->assertEquals(-1, $this->exo1->addition(2, -3));
        $this->assertEquals(0, $this->exo1->addition(0, 0));
    }

    public function testTrouverMax()
    {
        $this->assertEquals(5, $this->exo1->trouverMax(5, 3));
        $this->assertEquals(7, $this->exo1->trouverMax(7, 7));
        $this->assertEquals(2, $this->exo1->trouverMax(-1, 2));
    }

    public function testCompterCaracteres()
    {
        $this->assertEquals(5, $this->exo1->compterCaracteres("Hello"));
        $this->assertEquals(0, $this->exo1->compterCaracteres(""));
        $this->assertEquals(11, $this->exo1->compterCaracteres("Hello World"));
    }

    public function testEstPair()
    {
        $this->assertTrue($this->exo1->estPair(4));
        $this->assertFalse($this->exo1->estPair(3));
        $this->assertTrue($this->exo1->estPair(0));
    }

    public function testSaluer()
    {
        $this->assertEquals("Bonjour, Alice !", $this->exo1->saluer("Alice"));
        $this->assertEquals("Bonjour, Inconnu !", $this->exo1->saluer(""));
    }

    public function testCalculerAire()
    {
        $this->assertEquals(20, $this->exo1->calculerAire(4, 5));
        $this->assertEquals(0, $this->exo1->calculerAire(0, 5));
        $this->assertEquals(0, $this->exo1->calculerAire(-4, 5));
    }

    public function testConvertirEnMajuscules()
    {
        $this->assertEquals("HELLO", $this->exo1->convertirEnMajuscules("hello"));
        $this->assertEquals("HELLO WORLD", $this->exo1->convertirEnMajuscules("HeLLo WorLD"));
        $this->assertEquals("", $this->exo1->convertirEnMajuscules(""));
    }

    public function testSommeTableau()
    {
        $this->assertEquals(10, $this->exo1->sommeTableau([1, 2, 3, 4]));
        $this->assertEquals(-6, $this->exo1->sommeTableau([-1, -2, -3]));
        $this->assertEquals(0, $this->exo1->sommeTableau([]));
    }

    public function testExisteDansTableau()
    {
        $this->assertTrue($this->exo1->existeDansTableau(3, [1, 2, 3]));
        $this->assertFalse($this->exo1->existeDansTableau(4, [1, 2, 3]));
        $this->assertFalse($this->exo1->existeDansTableau(4, []));
    }
    
}
