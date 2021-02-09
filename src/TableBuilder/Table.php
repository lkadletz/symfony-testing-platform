<?php


namespace App\TableBuilder;


class Table {

    public function __construct(
        private string $name,
        /**
         * @var array<Column>
         */
        private array $cols = [],
        /**
         * @var array<Row>
         */
        private array $rows = [],
        /**
         * @var array<Option>
         */
        private array $options = []
    ) {
    }

    public function createColumn(string $name) : Column {
        $col = new Column($name);
        $this->addColumn($col);
        return $col;
    }

    private function addColumn(Column $column) : self {
        if(! in_array($column, $this->cols)) {
            $this->cols[] = $column;
        }

        return $this;
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