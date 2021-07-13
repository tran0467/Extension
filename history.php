<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical 3: History</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Ngoc Cat My" />
    <link rel="stylesheet" href="styles/style.css" />
    <script src="scripts/script.js" defer></script>
</head>
<body>

    <?php require_once "inc/menu.inc.php"; ?>

    <h1>History</h1>

    <?php
    require_once "inc/dbconn.inc.php";

    $conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn) {
        $sql = "SELECT name FROM Task WHERE completed=1 ORDER BY updated DESC;";
        if ($result = mysqli_query($conn, $sql)){
            if (mysqli_num_rows($result) > 0) {
                echo "<ul class=\"completed-tasks\">";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>" . $row["name"] . "</li>";
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
