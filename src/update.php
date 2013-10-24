<?php

if (!file_exists('public')) {
    mkdir('public');
}

if (file_exists('vendor/pallo/web/src/index.php')) {
    copy('vendor/pallo/web/src/index.php', 'public/index.php');
}

if (!file_exists('public/.htaccess') && file_exists('vendor/pallo/web/src/.htaccess')) {
    copy('vendor/pallo/web/src/.htaccess', 'public/.htaccess');
}