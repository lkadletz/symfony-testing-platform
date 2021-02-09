<?php


namespace App\TableBuilder;


class Column {

    public function __construct(
        private string $name
    ) { }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

}