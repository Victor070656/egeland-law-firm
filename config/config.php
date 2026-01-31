<?php
// Set default timezone to Norway
date_default_timezone_set('Europe/Oslo');

// Set locale to Norwegian (Bokmål)
// Try multiple locale strings for compatibility across different environments
$locales = ['nb_NO.UTF-8', 'nb_NO', 'nob', 'no_NO.UTF-8', 'no_NO', 'norwegian'];
setlocale(LC_ALL, $locales);

// Default language setting
define('DEFAULT_LANG', 'no');
?>
