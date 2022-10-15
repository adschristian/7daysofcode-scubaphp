<?php

$page = $_GET['page'] ?? 'login';
$content = match ($page) {
    'login' => do_login(),
    'register' => do_register(),
    default => do_not_found()
};

echo $content;
