<?php


namespace App\TableBuilder;


class Table {

    /**
     * @var Column[]
     */
    private array $cols = [];

    /**
     * @var Row[]
     */
    private array $rows = [];

    /**
     * @var Row[]
     */
    private array $footRows = [];

    /**
     * @var Option[]
     */
    private array $commonOptions = [];

    public function __construct(
        private string $name
    ) {
    }

    public function addColumn(string $title) : Column {
        $column = new Column($title);
        $this->cols[] = $column;
        return $column;
    }

    /**
     * @return Column[]
     */
    public function getColumns() : array {
        return $this->cols;
    }

    public function isExistsColumns() : bool {
        return ! ($this->cols === []);
    }

    public function addRow(int $id = 0) : Row{
        $row = new Row($id);
        $this->rows[] = $row;
        return $row;
    }

    public function addFooterRow() : Row {
        $row = new Row(0, true);
        $this->footRows[] = $row;
        return $row;
    }

    /**
     * @return Row[]
     */
    public function getFooterRows() : array {
        return $this->footRows;
    }

    public function isExistsFooter() : bool {
        return ! ($this->footRows === []);
    }

    /**
     * @return Row[]
     */
    public function getRows(bool $onlyFooter = false) : array {
        return $this->rows;
    }

    public function isExistsRows() : bool {
        return ! ($this->rows === []);
    }

    public function addCommonOption() : Option {
        $option = new Option();
        $this->commonOptions[] = $option;
        return $option;
    }


    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }


}