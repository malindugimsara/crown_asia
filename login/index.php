<?php
/**
 * Crown Asia - Portal Login Route Resolver
 * Redirects to the administration & investor login portal
 */
require_once dirname(__DIR__) . '/config.php';

header("Location: " . $base_url . "admin/login.php");
exit;
