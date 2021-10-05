<?php

    namespace App\Controllers;

    use App\Models\Database\TasksDatabase;
    use App\Models\Record;
    use App\Models\ToDoList;

    class ToDoController
    {
        public function showTasks(): void
        {
            $database = new TasksDatabase();
            $this->database = $database;
            require_once 'app/Views/Tasks/show.view.php';
        }

        public function addTask(): void
        {
            $todoList = new ToDoList('app/CSV/Tasks.csv');
            $record = new Record($_POST['task']);
            $todoList->add($record->getTask());
            header('Location: \todo');
        }

        public function deleteTask(): void
        {
            $database = new TasksDatabase();
            $todoList = new ToDoList('app/CSV/Tasks.csv');
            $todoList->delete($_POST['delete'], $database->getRecords());
            header('Location: \todo');
        }
    }