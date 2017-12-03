<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCode\Day2;

/**
 * Class SpreadsheetChecksumCalculator
 *
 * @package \Mharbers\AdventOfCode\Day2
 */
class SpreadsheetChecksumCalculator
{
    const DATA_DELIMITER = "\t";

    /**
     * @var \Mharbers\AdventOfCode\Day2\Spreadsheet
     */
    private $data;

    private function __construct(string $data)
    {
        $this->data = $data;
    }

    public static function fromString(string $data): self
    {
        return new static($data);
    }

    public function calculate(): int
    {
        return array_sum(
            array_map(
                function ($row) {
                    $rowData = explode(self::DATA_DELIMITER, $row);
                    sort($rowData);
                    return $rowData[\count($rowData)-1] - $rowData[0];
                },
                explode(PHP_EOL, $this->data)
            )
        );
    }
}
