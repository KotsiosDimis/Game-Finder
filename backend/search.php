<?php
// search.php
header('Content-Type: application/json');

$searchQuery = $_GET['search'] ?? '';

$results = [];

// Perform search logic here (replace with actual search logic)
if ($searchQuery) {
    // Example data for demonstration
    $results = [
        ['title' => 'Game 1', 'description' => 'Description of Game 1'],
        ['title' => 'Game 2', 'description' => 'Description of Game 2'],
        // Add more results or fetch from a database
    ];
}

// Output results as JSON
echo json_encode($results);
