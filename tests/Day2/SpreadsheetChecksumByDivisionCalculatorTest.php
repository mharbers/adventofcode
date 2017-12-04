<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCodeTest\Day2;

use Mharbers\AdventOfCode\Day2\SpreadsheetChecksumByDivisionCalculator;
use PHPUnit\Framework\TestCase;

/**
 * Class SpreadsheetChecksumByDivisionCalculatorTest
 *
 * @package \Mharbers\AdventOfCodeTest\Day2
 */
class SpreadsheetChecksumByDivisionCalculatorTest extends TestCase
{
    /** @test */
    public function it should be initializable()
    {
        $this->assertInstanceOf(SpreadsheetChecksumByDivisionCalculator::class, SpreadsheetChecksumByDivisionCalculator::fromString('1122'));
    }

    /** @test */
    public function it should calculate the checksum()
    {
        $data = <<<EOT
5	9	2	8
9	4	7	3
3	8	6	5
EOT;

        $checksum = SpreadsheetChecksumByDivisionCalculator::fromString($data);
        $this->assertEquals(9, $checksum->calculate());
    }
}
