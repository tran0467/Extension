<!DOCTYPE html>
<html lang="en">
<head>
 <title>Practical 3: Add</title>
 <meta charset="UTF-8" />
 <meta name="author" content="Ngoc Cat My" />
 <link rel="stylesheet" href="styles/style.css" />
 <script src="scripts/script.js" defer></script>
</head>
<body>
 <?php require_once "inc/menu.inc.php"; ?>
 <h1>Add a new task</h1>
 <form action="add-task.php" method="POST">
 <div id="taskinput">
    <div>
        <input type="text" name="task-name" placeholder="Enter the task name" required/>
    </div>
    <div>
        <input type="submit" value="Add Task" />
    </div>
</div>
</form>
</body>
</html>