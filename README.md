# Crud

Create a database in XAMPP named 'event_planner' and a table named 'events'. Then paste this code in the SQL to have the database ready:

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    event_time TIME NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('scheduled', 'cancelled') NOT NULL DEFAULT 'scheduled'
);

