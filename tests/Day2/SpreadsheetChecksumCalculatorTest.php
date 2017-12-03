<?php
/**
 * Date: 03-12-17
 * Time: 22:21
 */

namespace Mharbers\AdventOfCodeTest\Day2;

use Mharbers\AdventOfCode\Day2\SpreadsheetChecksumCalculator;
use PHPUnit\Framework\TestCase;

class SpreadsheetChecksumCalculatorTest extends TestCase
{
    /** @test */
    public function it should be initializable()
    {
        $this->assertInstanceOf(SpreadsheetChecksumCalculator::class, SpreadsheetChecksumCalculator::fromString(''));
    }

    /** @test */
    public function it should calculate the checksum()
    {
        $data = <<<EOT
5	1	9	5
7	5	3
2	4	6	8
EOT;
        $checksum = SpreadsheetChecksumCalculator::fromString($data);
        $this->assertEquals(18, $checksum->calculate());
    }
}
