<?php
declare(strict_types=1);

namespace PriyankJivani\CustomerTestimonials\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use PriyankJivani\CustomerTestimonials\Model\Config\Source\StatusOptions;

class StatusOptionsTest extends TestCase
{
    public function testToOptionArray(): void
    {
        $source = new StatusOptions();
        $options = $source->toOptionArray();

        $this->assertIsArray($options);
        $this->assertCount(2, $options);
        $this->assertEquals(1, $options[0]['value']);
        $this->assertEquals('Enabled', $options[0]['label']);
        $this->assertEquals(0, $options[1]['value']);
        $this->assertEquals('Disabled', $options[1]['label']);
    }
}
