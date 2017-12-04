<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day2;

/**
 * Class SpreadsheetChecksumByDivisionCalculator
 *
 * @package \Mharbers\AdventOfCode\Day2
 */
class SpreadsheetChecksumByDivisionCalculator
{
    /**
     * @var string
     */
    private $data;

    private function __construct(string $data)
    {
        $this->data = $data;
    }
    
    public static function fromString(string $data): self
    {
        return new self($data);
    }

    public function calculate(): int
    {
        return array_sum(
            array_map(
                function ($row) {
                    return $this->calculateRowScore(
                        explode("\t", $row)
                    );
                },
                explode(PHP_EOL, $this->data)
            )
        );

        return $score;
    }

    private function calculateRowScore(array $rowData): int
    {
        rsort($rowData);

        foreach($rowData as $dividend) {
            array_shift($rowData);
            foreach ($rowData as $divider) {
                if ($dividend % $divider === 0) {
                    return $dividend / $divider;
                }
            }
        }

        return 0;
    }
}
