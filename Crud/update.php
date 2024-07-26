<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM events WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner - Update Event</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Update Event</h1>
        <form action="update_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <label class="block mb-2" for="event_name">Event Name:</label>
            <input class="w-full border p-2 mb-4" type="text" id="event_name" name="event_name" value="<?php echo $row['event_name']; ?>" required>
            
            <label class="block mb-2" for="event_date">Date:</label>
            <input class="w-full border p-2 mb-4" type="date" id="event_date" name="event_date" value="<?php echo $row['event_date']; ?>" required>
            
            <label class="block mb-2" for="event_time">Time:</label>
            <input class="w-full border p-2 mb-4" type="time" id="event_time" name="event_time" value="<?php echo $row['event_time']; ?>" required>
            
            <label class="block mb-2" for="location">Location:</label>
            <input class="w-full border p-2 mb-4" type="text" id="location" name="location" value="<?php echo $row['location']; ?>" required>
            
            <label class="block mb-2" for="description">Description:</label>
            <textarea class="w-full border p-2 mb-4" id="description" name="description"><?php echo $row['description']; ?></textarea>
            
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Event</button>
        </form>
    </div>
</body>
</html>
