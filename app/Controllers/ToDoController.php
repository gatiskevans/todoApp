<?php

    namespace App\Controllers;

    use App\Models\Database\TasksDatabase;
    use App\Models\Record;
    use App\Models\ToDoList;
    use Ramsey\Uuid\Uuid;

    class ToDoController
    {
        public function showTasks(): void
        {
            $database = new TasksDatabase();
            require_once 'app/Views/Tasks/show.view.php';
        }

        public function showAddTask(): void
        {
            require_once 'app/Views/Tasks/add.view.php';
        }

        public function addTask(): void
        {
            $uuid = Uuid::uuid4();

            $todoList = new ToDoList('app/CSV/Tasks.csv');
            $record = new Record($uuid->toString(), $_POST['task'], Record::STATUS_CREATED);
            $todoList->add([
                $record->getId(),
                $record->getTask(),
                $record->getStatus(),
            ]);
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