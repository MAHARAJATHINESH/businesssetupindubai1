<?php
// Replace with your actual API key
$apiKey = 'AIzaSyDyq8XY88CqF5Uwd6hQCR-F4s-OjfIlIO4';

// Get place ID from query parameters
$placeId = isset($_GET['place_id']) ? $_GET['place_id'] : '';
$pageToken = isset($_GET['pagetoken']) ? $_GET['pagetoken'] : '';

// Create the API URL
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$placeId}&fields=reviews&key={$apiKey}&pagetoken={$pageToken}";

// Make the API request
$response = file_get_contents($url);

// Check if the response is false
if ($response === false) {
    echo json_encode(['error' => 'Failed to fetch data from Google Places API']);
    exit;
}

// Set the content type to JSON
header('Content-Type: application/json');

// Output the response
echo $response;
?>
