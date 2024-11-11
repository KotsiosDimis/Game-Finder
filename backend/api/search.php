<?php
// Allow CORS for development (remove or adjust in production)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Include the search function file
require_once __DIR__ . '/../functions/search_functions.php';

// Get the search query from the URL parameter
$query = $_GET['query'] ?? '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Validate the input
if (empty($query)) {
    echo json_encode([
        'success' => false,
        'error' => 'A search query is required.'
    ]);
    exit;
}

// Call the search function
$result = searchGames($query, $page);

// Return the search results as JSON
echo json_encode($result);
?>
