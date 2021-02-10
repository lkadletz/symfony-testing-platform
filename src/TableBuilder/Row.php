<?php


namespace App\TableBuilder;

class Row {

    /**
     * @var Option[]
     */
    private array $options = [];

    /**
     * @var Cell[]
     */
    private array $cells = [];

    public function __construct(
        private int $id = 0,
        private bool $foot = false
    ) { }

    public function addOption() : Option {
        $option = new Option();
        $this->options[] = $option;
        return $option;
    }

    /**
     * @return Option[]
     */
    public function getOptions() : array {
        return $this->options;
    }

    public function addCell(string $content) : Cell {
        $cell = new Cell($content);
        $this->cells[] = $cell;
        return $cell;
    }

    /**
     * @return Cell[]
     */
    public function getCells() : array {
        return $this->cells;
    }

    public function isExistsCells() : bool {
        return ! ($this->cells === []);
    }

    public function isFooter() : bool {
        return $this->foot;
    }

    public function getId() : int {
        return $this->id;
    }


}