<?php

namespace WP_CLI_Secure;

if (!class_exists('WP_CLI')) {
    return;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

\WP_CLI::add_command('secure', SecureCommand::class);