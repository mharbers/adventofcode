<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCodeTest\Day3;

use Mharbers\AdventOfCode\Day3\Grid;
use Mharbers\AdventOfCode\Day3\GridPosition;
use PHPUnit\Framework\TestCase;

/**
 * Class GridBuilderTest
 *
 * @package \Mharbers\AdventOfCodeTest\Day3
 */
class GridTest extends TestCase
{
    /** @test */
    public function it should be initializable()
    {
        $this->assertInstanceOf(Grid::class, Grid::buildWithMaxValue(1));
    }

    /** @test */
    public function it should throw an exception when position not in grid is requested()
    {
        $grid = Grid::buildWithMaxValue(1);
        $this->expectException(\OutOfBoundsException::class);
        $grid->positionFor(2);
    }

    /** @test */
    public function it should return the position from an int value()
    {
        $grid = Grid::buildWithMaxValue(13);
        $this->assertEquals(
            GridPosition::fromInt(2, 1),
            $grid->positionFor(12)
        );
    }
}
