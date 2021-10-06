<?php

    namespace App\Models;

    class Record
    {
        private string $task;
        private string $id;
        private string $status;
        
        public const STATUS_COMPLETED = 'completed';
        public const STATUS_CREATED = 'created';

        public function __construct(string $id, string $taskName, ?string $status = null)
        {
            $this->task = $taskName;
            $this->id = $id;
            $this->status = $status !== null ? self::STATUS_CREATED : $status;
        }

        public function getTask(): string
        {
            return $this->task;
        }

        public function getId(): string
        {
            return $this->id;
        }

        public function getStatus(): string
        {
            return $this->status;
        }

        public function setStatus(): void
        {
            $this->status = self::STATUS_COMPLETED;
        }
    }