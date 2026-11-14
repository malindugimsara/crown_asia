<?php
/**
 * Crown Asia - Global Configuration & Path Resolver
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__ . '/');
}

// Load Environment Configuration (.env)
require_once __DIR__ . '/includes/env.php';

if (!isset($base_url)) {
    $doc_root = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])) : '';
    $dir_path = str_replace('\\', '/', realpath(__DIR__));
    
    if ($doc_root && strpos($dir_path, $doc_root) === 0) {
        $sub = substr($dir_path, strlen($doc_root));
        $base_url = '/' . ltrim(rtrim($sub, '/') . '/', '/');
    } else {
        $base_url = '/';
    }
}

$portal_login_url    = $portal_login_url ?? ($base_url . 'admin/login.php');
$portal_register_url = $portal_register_url ?? ($base_url . 'contact/');

