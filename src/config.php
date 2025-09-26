<?php
/**
 * Fort Bend County Archive Browser - Config
 *
 * Configuration file with FTP connection settings.
 * 
 * IMPORTANT: This file uses placeholder credentials.
 * Replace with valid ones in a secure environment only.
 */

// FTP connection settings
define('FTP_HOST', 'ftp.example.com');   // Replace with actual FTP host
define('FTP_USER', 'demo_user');        // Replace with FTP username
define('FTP_PASS', 'demo_pass');        // Replace with FTP password

// Default starting directory
define('FTP_BASE_DIR', '/');            // Root directory or /Calendars, etc.

// UI settings
define('ARCHIVE_TITLE', 'Fort Bend County Archive Browser');
define('GRID_COLUMNS', 3);              // Number of columns in folder grid

// Security (optional)
define('HIDE_EXTENSIONS', ['.bat', '.log', '.txt']); // Always hidden
define('HIDE_FOLDERS', ['archive', 'aspnet client', 'rss']); // Hidden folders
