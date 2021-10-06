<?php require_once 'app/Views/Templates/header.php'; ?>


    <div id="container">

        <div id="list">

            <h2>ToDo App</h2>
            <br>
            <table>

                <?php foreach($database->getRecords() as $records): ?>
                <tbody>
                            <?php echo "<td> $records[1]</td>"; ?>
                            <?php echo "<td><small><b>$records[2]</b></small></td>"; ?>
                </tbody>
               <?php endforeach; ?>

                <?php if(count($database->getCsv()) === 0)
                    echo "<td><b>There are no contents in ToDo list yet!</b></td>"; ?>



            </table>

        </div>

        <br><br>

        <div id="addDelete">
            <br>
            <a href="/add">Add Task</a><br>
            <br>

            <form action="/delete" method="post">
                <label for="task">Delete Task:</label><br>
                <input type="text" name="delete" id="task" placeholder="Copy the task in here" /><br><br>
                <input type="submit" name="addTask" value="Delete Task" />
            </form>

        </div>

    </div>

<?php require_once 'app/Views/Templates/footer.php'; ?>