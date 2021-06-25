<?php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'test' , 'test');

$queriesSelect = [
    'SELECT * FROM clients',
    'SELECT * FROM clients where is_active = 1',
    'SELECT * FROM clients where age >= 30',
    "SELECT * FROM clients WHERE first_name LIKE 'B%'",
    'SELECT count(id) as clients_count FROM clients',
    'SELECT max(age) as biggest_age FROM clients',
    'SELECT count(id) as clients_count FROM clients where is_active = 1',
    'SELECT * FROM clients ORDER BY age',
    'SELECT * FROM clients ORDER BY first_name',
    'SELECT count(id) as clients_count  FROM clients where is_active = 1 and age > 25',
];

foreach ($queriesSelect as $query) {
    $stmt = $pdo->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
}

$queriesUpdateAndDelete = [
    'UPDATE clients SET age = 45 where id = 2',
    'UPDATE clients SET first_name = 1111111 where id = 1',
    'UPDATE clients SET is_active = 0 where id = 3',
    'DELETE FROM clients WHERE is_active = 0',
    'DELETE FROM clients',
    'DELETE FROM clients WHERE id > 3',
];

foreach ($queriesUpdateAndDelete as $query) {
    $stmt = $pdo->query($query);
    $stmt->execute();
}
