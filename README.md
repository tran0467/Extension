# To-do-list-website

In order to develop PHP webpages, the project uses the AMPPs package. AMPPs provides a
pre-configured web development stack that incorporates the Apache web server, MySQL DBMS, and PHP interpreter as
well as the phpMyAdmin management interface for MySQL. Together, these components support back-end development.

PHP includes native support for accessing various DBMSs. For this project, it will use the procedural MySQLi interface to interact with the MySQL database and create/read/update records

# Website features
- Add Tasks: User enter a new task into the Add page and that it appears at the bottom of the task list in the Tasks page
- Current Tasks: Show the list of current tasks which are not completed and the total number of current tasks
- Task Completion: Clicking a task in the task list causes it to disappear off the task list.
- History Tasks: Display a history of completed tasks in the History page.

# Tasks
- Build a simple task list ‘web app’ using PHP
- Add a menu to your page and styling it with CSS
- Create a new PHP page to add tasks
- Add functionality to support completing tasks
- Add a new PHP page to display a history of completed tasks
- Display the number of current tasks

# File description

- The db.sql file contains the SQL statements necessary to create the database
- The index.php file contains the template of a tasks page adding the necessary PHP code so that it retrieves the current list of tasks from the database when loaded.
- The complete.php file reads the id value from the URL query string and then updates the associated task record in the database to mark the task as completed.
- The history.php file displays a list of completed tasks, which can be retrieved from the database.
- All CSS is defined in the style.css file
- Within add-task.php, PHP code processes the submitted form and insert a new record into the database.
