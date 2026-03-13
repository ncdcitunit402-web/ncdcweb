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

// Content Security Policy (single line)
header("Content-Security-Policy: default-src 'self'; img-src 'self' data: https:; script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://kit.fontawesome.com; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com; font-src 'self' https://cdnjs.cloudflare.com https://fonts.gstatic.com data:;");

// Disable caching of sensitive pages
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Extra security
header("Permissions-Policy: geolocation=(), camera=(), microphone=()");
?>