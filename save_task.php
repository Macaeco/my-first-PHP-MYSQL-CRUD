<?php
include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query failed");
    }

    $_SESSION['message'] = 'Task Save succesfully';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}


?>