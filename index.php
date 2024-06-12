<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string from the request URI
$requestUri = explode('?', $requestUri, 2)[0];

// Remove leading slash and the prefix
$requestUri = preg_replace('~^/Digitalni-dom/~', '', $requestUri);

// If the request is for the root directory, load the default index.php
if ($requestUri == '') {
    $requestUri = 'index.php';
} else {
    // Replace slashes with underscores and append .php extension
    $requestUri = str_replace('/', '_', $requestUri) . '.php';
}

// Check if the file exists
if (file_exists($requestUri)) {
    include($requestUri);
} else {
    // If the file doesn't exist, return a 404 response
    http_response_code(404);
    include('pocetna.php');
}
?>
