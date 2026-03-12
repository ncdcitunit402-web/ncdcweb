<?php
// ==============================
// SIMPLE SITE SEARCH ENGINE
// ==============================

$query = isset($_GET['q']) ? trim($_GET['q']) : '';

if(strlen($query) < 2){
    exit;
}

$query_lower = strtolower($query);

// Site root folder
$root = $_SERVER['DOCUMENT_ROOT'] . "/NCDC_MOHFW/";

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root)
);

foreach ($iterator as $file) {

    if ($file->isDir()) continue;

    $path = $file->getPathname();
    $ext  = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    // Allow only these files
    if (!in_array($ext, ['php','html','pdf'])) continue;

    $filename = basename($path);

    // Match search query
    if (strpos(strtolower($filename), $query_lower) !== false) {

        // Icon selection
        $icon = ($ext == 'pdf') ? '📄' : '📄';

        // URL convert
        $url = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);

        // Highlight keyword
        $title = preg_replace(
            "/($query)/i",
            "<mark>$1</mark>",
            $filename
        );

        echo "<div class='search-item'>";
        echo "$icon <a href='$url'>$title</a>";
        echo "</div>";

    }
}
?>