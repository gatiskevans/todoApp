<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>ToDo List</title>
</head>
<body>
    <div id="addDelete">

        <form action="/add" method="post"><br>
            <label for="task"><b id="addTask" >Add Task:</b></label><br><br>
            <input type="text" name="task" id="task" /><br><br>
            <input type="submit" name="addTask" value="Add" />
        </form>
        <br>
        <a href="/todo" >Back to Task List</a>
        <br><br>
    </div>

</body>
</html>