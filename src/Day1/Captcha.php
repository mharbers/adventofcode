<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day1;

/**
 * Class Captcha
 *
 * @package \Mharbers\AdventOfCode
 */
class Captcha
{
    private $sequence;

    public function __construct(string $sequence)
    {
        $this->sequence = $sequence;
    }

    public static function fromString(string $sequence): self
    {
        return new self($sequence);
    }

    public function score(): int
    {
        $previousDigit = $this->sequence[0];
        $sequence = substr($this->sequence, 1) . $previousDigit;
        $digits = str_split($sequence);

        $score = 0;

        array_walk(
            $digits,
            function ($digit) use (&$score, &$previousDigit) {
                if ($digit === $previousDigit) {
                    $score += $digit;
                }

                $previousDigit = $digit;
            }
        );

        return $score;
    }
}
