<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day3;

/**
 * Class GridPosition
 *
 * @package \Mharbers\AdventOfCode\Day3
 */
class GridPosition
{
    /**
     * @var int
     */
    private $x;
    /**
     * @var int
     */
    private $y;

    private function __construct(int $x, int $y)
    {
        $this->x = abs($x);
        $this->y = abs($y);
    }

    public static function fromInt(int $x, int $y): self
    {
        return new self($x, $y);
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function __toString(): string
    {
        return "$this->x, $this->y";
    }
}
