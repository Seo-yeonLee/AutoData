<?php
/**
 * Tests for AutoData
 */

use PHPUnit\Framework\TestCase;
use Autodata\Autodata;

class AutodataTest extends TestCase {
    private Autodata $instance;

    protected function setUp(): void {
        $this->instance = new Autodata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autodata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
