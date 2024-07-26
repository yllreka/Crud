<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner - Upcoming Events</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="p-4">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Upcoming Events</h1>
    
        <?php
        include 'db.php';

        $sql = "SELECT * FROM events WHERE status = 'scheduled' ORDER BY event_date";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="mb-4 border-b pb-2">';
                echo '<h2 class="text-xl font-bold">' . htmlspecialchars($row['event_name']) . '</h2>';
                echo '<p><strong>Date:</strong> ' . htmlspecialchars($row['event_date']) . '</p>';
                echo '<p><strong>Time:</strong> ' . htmlspecialchars($row['event_time']) . '</p>';
                echo '<p><strong>Location:</strong> ' . htmlspecialchars($row['location']) . '</p>';
                echo '<p><strong>Description:</strong><br>' . nl2br(htmlspecialchars($row['description'])) . '</p>';
                echo '<a href="update.php?id=' . $row['id'] . '" class="text-blue-500 hover:underline mr-4">Edit</a>';
                echo '<a href="cancel.php?id=' . $row['id'] . '" class="text-red-500 hover:underline">Cancel</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No upcoming events.</p>';
        }

        $conn->close();
        ?>
        <a href="create.php" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Schedule New Event</a>
    </div>
</body>
</html>

