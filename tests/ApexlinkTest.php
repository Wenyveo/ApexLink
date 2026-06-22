<?php
/**
 * Tests for ApexLink
 */

use PHPUnit\Framework\TestCase;
use Apexlink\Apexlink;

class ApexlinkTest extends TestCase {
    private Apexlink $instance;

    protected function setUp(): void {
        $this->instance = new Apexlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apexlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
