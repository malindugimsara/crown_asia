<?php
/**
 * Crown Asia - Environment Variable Loader (.env)
 */

if (!function_exists('loadEnv')) {
    function loadEnv($filePath = null) {
        if ($filePath === null) {
            $filePath = dirname(__DIR__) . '/.env';
        }

        if (!file_exists($filePath)) {
            return false;
        }

        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            return false;
        }

        foreach ($lines as $line) {
            $line = trim($line);

            // Skip comments and empty lines
            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }

            // Split by the first '='
            $parts = explode('=', $line, 2);
            if (count($parts) === 2) {
                $key = trim($parts[0]);
                $val = trim($parts[1]);

                // Strip outer quotes if present
                if ((str_starts_with($val, '"') && str_ends_with($val, '"')) ||
                    (str_starts_with($val, "'") && str_ends_with($val, "'"))) {
                    $val = substr($val, 1, -1);
                }

                // Handle common boolean & null literals
                $lowerVal = strtolower($val);
                if ($lowerVal === 'true') {
                    $val = true;
                } elseif ($lowerVal === 'false') {
                    $val = false;
                } elseif ($lowerVal === 'null') {
                    $val = null;
                }

                if (!array_key_exists($key, $_ENV)) {
                    $_ENV[$key] = $val;
                }
                if (!array_key_exists($key, $_SERVER)) {
                    $_SERVER[$key] = $val;
                }
                if (is_string($val)) {
                    putenv("{$key}={$val}");
                }
            }
        }

        return true;
    }
}

if (!function_exists('env')) {
    function env($key, $default = null) {
        if (array_key_exists($key, $_ENV)) {
            return $_ENV[$key];
        }
        if (array_key_exists($key, $_SERVER)) {
            return $_SERVER[$key];
        }
        $val = getenv($key);
        if ($val !== false) {
            return $val;
        }
        return $default;
    }
}

// Automatically load .env on include
loadEnv();
