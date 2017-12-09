<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day3;

/**
 * Class PositionCalculator
 *
 * @package \Mharbers\AdventOfCode\Day3
 */
class GridPositionCalculator
{

    /**
     * @var \Mharbers\AdventOfCode\Day3\GridPosition
     */
    private $gridPosition;

    private function __construct(GridPosition $gridPosition)
    {
        $this->gridPosition = $gridPosition;
    }

    public static function fromGridPosition(GridPosition $gridPosition): self
    {
        return new static($gridPosition);
    }

    public function manhattanDistanceTo(GridPosition $gridPosition): int
    {
        $distanceX = $this->gridPosition->getX() - $gridPosition->getX();
        $distanceY = $this->gridPosition->getY() - $gridPosition->getY();

        return abs($distanceX + $distanceY);
    }
}
