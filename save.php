<?php 

include("db.php");

    if (isset($_POST['save_task']))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
        $resultado = $mysqli->query($query);
        if(!$resultado)
        {
            printf("Error: %s\n", $mysqli->error);
        }
        
        #echo 'saved';
        #printf ("Nuevo registro con el id %d.\n", $mysqli->insert_id);
        
        header("Location: index.php");

        $mysqli->close();
    }
?>