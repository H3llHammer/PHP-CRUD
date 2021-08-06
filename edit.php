<?php

    include("db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";

        $result = $mysqli->query($query);
        if($result->num_rows == 1)
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $title = $row["title"];
            $description = $row["description"];
        }
    }

    if(isset($_POST['update']))
    {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task SET title = '$title', description = '$description' WHERE id = $id";
        $mysqli->query($query);

        $_SESSION['message'] = 'Task updated successfully';
        $_SESSION['message_type'] = 'warning';

        header("Location: index.php");
    }

?>

<?php include("includes/header.php") ?>
<?php include("includes/navigation.php") ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
               <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="title" value="<?php echo $title ?>"
                            class="form-control" placeholder="Update title">
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="2" class="form-control" placeholder="Update description">
                                <?php echo $description ?>
                            </textarea>
                        </div>
                        <button class="btn btn-success" name="update">
                            Update
                        </button>
                    </form>
               </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>
