<?php

    namespace App\Models;

    class Record
    {
        private string $task;

        public function __construct(string $taskName)
        {
            $this->task = $taskName;
        }

        public function getTask(): string
        {
            return $this->task;
        }
    }