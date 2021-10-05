<?php

    namespace App\Models\Database;

    use League\Csv\Reader;

    class TasksDatabase
    {
        private Reader $csv;

        public function __construct()
        {
            $this->csv = Reader::createFromPath('app/CSV/Tasks.csv', 'r');
        }

        public function getCsv(): Reader
        {
            return $this->csv;
        }

        public function getRecords(): \Iterator
        {
            return $this->csv->getRecords();
        }
    }