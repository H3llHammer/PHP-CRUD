<?php

    include("db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = $mysqli->query($query);
        if(!$result)
        {
            printf("Error: %s\n", $mysqli->error);
        }  

        $_SESSION['message'] = 'Task removed succesfully';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }

    $mysqli->close();

?>