<?php

function store_data($name, $email, $phone, $ip, $geolocation) {
    $db = new SQLite3('data.db');

    // Create a table if it doesn't exist
    $db->exec('CREATE TABLE IF NOT EXISTS form_data (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT, phone TEXT, timestamp TEXT, ip TEXT, geolocation TEXT)');

    $stmt = $db->prepare('INSERT INTO form_data (name, email, phone, timestamp, ip, geolocation) VALUES (:name, :email, :phone, :timestamp, :ip, :geolocation)');

    // Bind the values to the statement
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
    $stmt->bindValue(':timestamp', date('Y-m-d H:i:s'), SQLITE3_TEXT);
    $stmt->bindValue(':ip', $ip, SQLITE3_TEXT);
    $stmt->bindValue(':geolocation', $geolocation, SQLITE3_TEXT);

    $stmt->execute();
    $db->close();
}


function get_data() {
    $db = new SQLite3('data.db');
    $results = $db->query('SELECT * FROM form_data');
    $db->close();
    return $results;
}

?>
