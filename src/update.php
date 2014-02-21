<?php

if (!file_exists('public')) {
    mkdir('public');
}

if (file_exists('vendor/ride/web/src/index.php')) {
    copy('vendor/ride/web/src/index.php', 'public/index.php');
}

if (!file_exists('public/.htaccess') && file_exists('vendor/ride/web/src/.htaccess')) {
    copy('vendor/ride/web/src/.htaccess', 'public/.htaccess');
}