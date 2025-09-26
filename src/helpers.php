<?php
/**
 * Fort Bend County Archive Browser - Helpers
 * 
 * Contains utility functions for cleaning names,
 * hiding sensitive items, and rendering icons.
 */

// Clean folder/file names for display
function clean_name($name) {
    // Remove path, underscores, numeric prefixes
    $base = basename($name);
    $base = preg_replace('/^\d+[_-]*/', '', $base);
    $base = str_replace('_', ' ', $base);
    return ucfirst($base);
}

// Decide whether to hide a file/folder
function should_hide($name) {
    $lower = strtolower($name);

    // Hidden folders
    $hidden_folders = ['archive', 'aspnet client', 'rss'];
    foreach ($hidden_folders as $f) {
        if (strpos($lower, $f) !== false) {
            return true;
        }
    }

    // Hidden file extensions
    $hidden_exts = ['.bat', '.log', '.txt'];
    foreach ($hidden_exts as $ext) {
        if (substr($lower, -strlen($ext)) === $ext) {
            return true;
        }
    }

    return false;
}

// Render SVG icon based on type
function get_icon($name) {
    if (substr($name, -1) === '/') {
        // Folder icon
        return '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M10 4l2 2h8a2 2 0 0 1 2 2v10a2 
            2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 
            2 0 0 1 2-2h6z"/>
        </svg>';
    } else {
        // File icon
        return '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M14 2H6a2 2 0 0 0-2 
            2v16a2 2 0 0 0 2 2h12a2 2 0 0 
            0 2-2V8l-6-6z"/>
        </svg>';
    }
}

// Build breadcrumb navigation
function build_breadcrumbs($path) {
    $parts = explode('/', trim($path, '/'));
    $breadcrumbs = '<nav class="breadcrumbs">';
    $link = '';

    foreach ($parts as $i => $part) {
        $link .= '/' . $part;
        $name = clean_name($part);

        if ($i < count($parts) - 1) {
            $breadcrumbs .= '<a href="?dir=' . urlencode($link) . '">' . $name . '</a> / ';
        } else {
            $breadcrumbs .= '<span>' . $name . '</span>';
        }
    }

    $breadcrumbs .= '</nav>';
    return $breadcrumbs;
}
