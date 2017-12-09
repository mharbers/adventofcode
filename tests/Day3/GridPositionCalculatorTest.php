<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCodeTest\Day3;

use Mharbers\AdventOfCode\Day3\Grid;
use Mharbers\AdventOfCode\Day3\GridPosition;
use Mharbers\AdventOfCode\Day3\GridPositionCalculator;
use PHPUnit\Framework\TestCase;

/**
 * Class ManhattanDistanceCalculatorTest
 *
 * @package \Mharbers\AdventOfCodeTest\Day3
 */
class GridPositionCalculatorTest extends TestCase
{
    /** @test */
    public function it should be initializable()
    {
        $this->assertInstanceOf(GridPositionCalculator::class, GridPositionCalculator::fromGridPosition(GridPosition::fromInt(0, 0)));
    }

    /**
     * @test
     * @dataProvider manhattanDistanceDataProvider
     */
    public function it should calculate manhattan distance()
    {
        $calculator = GridPositionCalculator::fromGridPosition(GridPosition::fromInt(0, 0));
        $this->assertEquals(3, $calculator->manhattanDistanceTo(GridPosition::fromInt(2, 1)));
    }

    public function manhattanDistanceDataProvider()
    {
        return [
            [0, GridPosition::fromInt(0, 0)],
            [3, GridPosition::fromInt( 2, 1)],
            [23, GridPosition::fromInt( 0, 2)],
        ];
    }
}
