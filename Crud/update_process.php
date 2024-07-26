<?php
include 'db.php';

$id = $_POST['id'];
$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$location = $_POST['location'];
$description = $_POST['description'];

$sql = "UPDATE events SET 
            event_name = '$event_name',
            event_date = '$event_date',
            event_time = '$event_time',
            location = '$location',
            description = '$description'
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error updating event: " . $conn->error;
}

$conn->close();
?>
