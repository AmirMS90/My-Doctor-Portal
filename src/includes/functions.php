<?php

declare(strict_types=1);

function sanitize_input(string $input):string
{
    $input = trim($input);
    $input = htmlspecialchars($input);
    return $input;
}

function sql_input(mysqli $db, string $input): string
{
    $input = sanitize_input($input);
    return mysqli_real_escape_string($db, $input);
}

function validate_email(string $email): bool | string
{
    if (empty($email)) {
        return false;
    }
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_dark_mode(): bool{
    if (isset($_COOKIE['darkMode'])) {
        if ($_COOKIE['darkMode'] == 'active')
            return true;
    }
    return false;
}
