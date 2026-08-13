<?php
/**
 * Tests for NodeBridge
 */

use PHPUnit\Framework\TestCase;
use Nodebridge\Nodebridge;

class NodebridgeTest extends TestCase {
    private Nodebridge $instance;

    protected function setUp(): void {
        $this->instance = new Nodebridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodebridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
