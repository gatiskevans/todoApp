<?php

    namespace App\Models;

    use League\Csv\Writer;

    class ToDoList
    {
        private Writer $csv;
        private array $tasks = [];
        private string $path;

        public function __construct(string $path)
        {
            $this->csv = Writer::createFromPath($path, 'a');
            $this->path = $path;
        }

        public function add(array $record): void
        {
            $this->csv->insertOne($record);
        }

        public function delete(string $task, \Iterator $records): void
        {
            foreach ($records as $record) {
                if($record[1] !== $task) $this->tasks[] = $record;
            }
            $this->csv = Writer::createFromPath($this->path, 'w');
            $this->csv->insertAll($this->tasks);
        }
    }