<?php
// pdf_helper.php

// Function to format file size in B, KB, MB, GB
function formatSize($bytes) {
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } else {
        $bytes = $bytes . ' B';
    }
    return $bytes;
}

// Function to get PDF size
function getPDFSize($pdfPath) {
    if(file_exists($pdfPath)) {
        return formatSize(filesize($pdfPath));
    } else {
        return "0 KB";
    }
}
?>
