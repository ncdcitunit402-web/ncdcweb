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


// Disable caching of sensitive pages
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Extra security
header("Permissions-Policy: geolocation=(), camera=(), microphone=()");
?>