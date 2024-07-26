<?php
include 'db.php';

$id = $_GET['id'];

$sql = "UPDATE events SET status = 'cancelled' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error cancelling event: " . $conn->error;
}

$conn->close();
?>
