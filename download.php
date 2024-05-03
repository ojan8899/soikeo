<?php
// Function to detect user agent
function get_user_agent() {
    return $_SERVER['HTTP_USER_AGENT'];
}

// Function to check if the user agent is from iOS
function is_ios() {
    $user_agent = get_user_agent();
    return stripos($user_agent, 'iPhone') !== false || stripos($user_agent, 'iPad') !== false || stripos($user_agent, 'iPod') !== false;
}

// Function to perform redirection
function redirect($url) {
    header('Location: ' . $url);
    exit();
}

// Define URLs for redirection
$android_url = 'https://play.google.com/store/apps/details?id=com.dzo.bongda';
$ios_url = 'https://apps.apple.com/vn/app/bongdadzo-t%E1%BB%B7-s%E1%BB%91-b%C3%B3ng-%C4%91%C3%A1-live/id6474168192';

// Check user agent and redirect accordingly
if (is_ios()) {
    redirect($ios_url);
} else {
    redirect($android_url);
}
?>