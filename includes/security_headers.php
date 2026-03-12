
<?php
// ===============================
// SECURITY HEADERS
// ===============================

// Prevent MIME type sniffing
header("X-Content-Type-Options: nosniff");

// Prevent clickjacking
header("X-Frame-Options: SAMEORIGIN");

// Referrer policy
header("Referrer-Policy: strict-origin-when-cross-origin");

// ===============================
// CONTENT SECURITY POLICY (FIXED)
// ===============================

header("Content-Security-Policy: default-src 'self'; img-src 'self' data: https:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://translate.google.com https://translate.googleapis.com https://translate.gstatic.com https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com https://translate.googleapis.com; font-src 'self' https://cdnjs.cloudflare.com https://fonts.gstatic.com data:; connect-src 'self' https://translate.googleapis.com https://translate.gstatic.com; frame-src https://translate.google.com https://translate.googleapis.com;");

// ===============================
// CACHE CONTROL
// ===============================
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// ===============================
// PERMISSIONS POLICY
// ===============================
header("Permissions-Policy: geolocation=(), camera=(), microphone=()");
?>

