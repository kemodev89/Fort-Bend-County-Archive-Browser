<?php
/**
 * Fort Bend County Archive Browser (Demo)
 * 
 * Connects to FTP, lists directories/files with clean UI and breadcrumbs.
 * 
 * NOTE: Replace FTP credentials in config.php with your own.
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';

// Connect to FTP (placeholder - no real credentials here)
$conn = ftp_connect(FTP_HOST);
ftp_login($conn, FTP_USER, FTP_PASS);

// Get current path
$path = isset($_GET['dir']) ? $_GET['dir'] : '/';
$files = ftp_nlist($conn, $path);

// Render UI
echo "<h2>Archive Browser</h2>";
echo build_breadcrumbs($path);
echo "<div class='grid'>";

foreach ($files as $file) {
    if (should_hide($file)) continue;

    $name = clean_name($file);
    $icon = get_icon($file);
    echo "<div class='item'>$icon <span>$name</span></div>";
}

echo "</div>";

ftp_close($conn);
