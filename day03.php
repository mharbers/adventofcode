<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

$score = 325489;

$grid = \Mharbers\AdventOfCode\Day3\Grid::buildWithMaxValue($score);
$calculator = \Mharbers\AdventOfCode\Day3\GridPositionCalculator::fromGridPosition(
    \Mharbers\AdventOfCode\Day3\GridPosition::fromInt(0, 0)
);

var_dump(
    $calculator->manhattanDistanceTo(
        $grid->positionFor($score)
    )
);
