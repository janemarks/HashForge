<?php
/**
 * Tests for HashForge
 */

use PHPUnit\Framework\TestCase;
use Hashforge\Hashforge;

class HashforgeTest extends TestCase {
    private Hashforge $instance;

    protected function setUp(): void {
        $this->instance = new Hashforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
