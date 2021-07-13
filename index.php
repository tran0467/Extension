<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical 3: Current tasks</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Ngoc Cat My" />
    <link rel="stylesheet" href="styles/style.css" />
    <script src="scripts/script.js" defer></script>
</head>
<body>

    <?php require_once "inc/menu.inc.php"; ?>

    <h1>Current</h1>

    <?php
    require_once "inc/dbconn.inc.php";

    $conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn) {

        $sql1 = "SELECT count(*) FROM Task WHERE completed=0;";
        if ($result1 = mysqli_query($conn, $sql1)){
            $count = mysqli_fetch_assoc($result1);
            echo "<div id=\"count-task\">";
            if ($count["count(*)"] == "0") {
                echo "No tasks";
            } else if ($count["count(*)"] == "1") {
                echo "1 task";
            } else {
                echo $count["count(*)"] . " tasks";
            }
            echo "</div>";
            mysqli_free_result($result1);
        }
        else {
            echo mysqli_error($conn);
        }

        $sql = "SELECT id, name FROM Task WHERE completed=0;";
        if ($result = mysqli_query($conn, $sql)){
            if (mysqli_num_rows($result) > 0) {
                echo "<ul class=\"task-list\">";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>" . "<a href=\"complete.php?id=" . $row["id"] . "\">" . $row["name"] . "</li>";
                }
                echo "</ul>";
            }
            mysqli_free_result($result);
        }
        else {
            echo mysqli_error($conn);
        }

        mysqli_close($conn);
    }
        

    ?>

    

</body>
</html>
