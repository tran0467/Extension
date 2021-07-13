<?php
    if (isset($_GET["id"])) {
        require_once "inc/dbconn.inc.php";
        $sql = "UPDATE Task SET completed=1, updated=now() WHERE id=?;";
        $statement = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($statement, $sql);
        mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_GET["id"]));
        if (mysqli_stmt_execute($statement)) {
            header("location: index.php");
        } else {
            echo mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>