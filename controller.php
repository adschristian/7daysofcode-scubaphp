<?php

function do_register()
{
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    if ($requestMethod === 'GET') {
        return render_view('register');
    }
    $personData = $_POST['person'] ?? false;
    if ($personData === false) {
        return render_view('register');
    }
    unset($personData['password-confirm']);
    if (crud_create($personData)) {
        header('Location: /?page-login');
        die;
    }
    http_response_code(500);

    return 'unknown error occurred';
}

function do_login()
{
    return render_view('login');
}

function do_not_found()
{
    http_response_code(404);

    return render_view('not_found');
}
