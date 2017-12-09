<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day3;

/**
 * Class GridBuilder
 *
 * @package \Mharbers\AdventOfCode\Day3
 */
class Grid
{
    private $positions;

    private function __construct(int $maxGridValue)
    {
        $this->populateGrid($maxGridValue);
    }

    public static function buildWithMaxValue(int $maxGridValue): self
    {
        return new static($maxGridValue);
    }

    public function positionFor(int $value): GridPosition
    {
        if (!array_key_exists($value, $this->positions)) {
            throw new \OutOfBoundsException("$value is not within the grid");
        }

        return $this->positions[$value];
    }

    private function populateGrid(int $maxValue): void
    {
        $this->positions = [];

        $direction = 1;
        $positionX = 0;
        $positionY = 0;
        $step = 2;
        $substep = 1;
        $counter = 2;
        $this->positions[1] = GridPosition::fromInt(0, 0);
        while ($counter <= $maxValue) {
            if ($substep <= $step/2) {
                $offsetX = 1 * $direction;
                $offsetY = 0;
            } else {
                $offsetX = 0;
                $offsetY = 1 * $direction;
            }

            $positionX += $offsetX;
            $positionY += $offsetY;

            $this->positions[$counter] = GridPosition::fromInt($positionX, $positionY);

            if ($substep === $step) {
                $direction *= -1;
                $substep = 0;
                $step += 2;
            }

            $substep++;
            $counter++;
        }
    }
}
