<?php
// Include the config file
require_once __DIR__ . '/../config/config.php';

/**
 * Fetches games from RAWG API based on a search query.
 *
 * @param string $query The search query.
 * @param int $page Optional page number for pagination (default: 1).
 * @return array Associative array containing the search results or an error message.
 */
function searchGames($query, $page = 1) {
    // Construct the API URL with query parameters
    $url = BASE_URL . '?key=' . urlencode(API_KEY) . '&search=' . urlencode($query) . '&page=' . intval($page) . '&page_size=' . PAGE_SIZE;

    // Initialize curl
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ]);

    // Execute curl and handle errors
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if (curl_errno($curl) || $httpCode !== 200) {
        curl_close($curl);
        return [
            'success' => false,
            'error' => DEBUG_MODE ? curl_error($curl) : 'An error occurred while fetching game data.'
        ];
    }
    curl_close($curl);

    // Decode and return JSON response
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        return [
            'success' => false,
            'error' => DEBUG_MODE ? json_last_error_msg() : 'Failed to decode response.'
        ];
    }

    // Return results in a consistent format
    return [
        'success' => true,
        'data' => $data['results'] ?? []
    ];
}
?>
