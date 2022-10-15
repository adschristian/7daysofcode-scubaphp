<?php

function do_register()
{
    return render_view('register');
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
