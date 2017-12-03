<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day1;

/**
 * Class HalfwayAroundCaptcha
 *
 * @package \Mharbers\AdventOfCode\Day1
 */
class HalfwayAroundCaptcha
{

    private $sequence;

    private function __construct(string $sequence)
    {
        $this->sequence = $sequence;
    }

    public static function fromString(string $sequence): self
    {
        return new static($sequence);
    }

    public function score()
    {
        $score = 0;

        [$sequencePartA,  $sequencePartB] = str_split($this->sequence, strlen($this->sequence)/2);

        $partLength = strlen($sequencePartA);
        for ($i = 0; $i < $partLength; $i++) {
            if ($sequencePartA[$i] !== $sequencePartB[$i]) {
                continue;
            }

            $score += 2*$sequencePartA[$i];
        }


        return $score;
    }
}
