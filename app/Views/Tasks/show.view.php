<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="app/Views/CSS/Style.css">
    <title>ToDo List</title>
</head>
<body>

    <div id="container">

        <div id="list">

            <h2>ToDo App</h2>
            <br>
            <table>

                <?php foreach($database->getRecords() as $records): ?>

                <tbody>

                    <?php foreach($records as $record): ?>

                            <?php echo "<td><b>Task:</b> $record</td>"; ?>

                    <?php endforeach; ?>

               <?php endforeach; ?>

                <?php if(count($database->getCsv()) === 0) echo "<td><b>There are no contents in ToDo list yet!</b></td>"; ?>

                </tbody>

            </table>

        </div>

        <br><br>

        <div id="addDelete">
            <br>
            <a href="app/Views/Tasks/add.view.php">Add Task</a><br>
            <br>

            <form action="/delete" method="post">
                <label for="task">Delete Task:</label><br>
                <input type="text" name="delete" id="task" placeholder="Copy the task in here" /><br><br>
                <input type="submit" name="addTask" value="Delete Task" />
            </form>

        </div>

    </div>

</body>
</html>