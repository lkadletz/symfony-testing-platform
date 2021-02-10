<?php


namespace App\TableBuilder;


class Cell {

    public function __construct(
        private string $content
    ) {

    }

    public function getContent() : string {
        return $this->content;
    }
}