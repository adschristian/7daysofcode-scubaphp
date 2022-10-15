<?php

function render_view(string $template, string $view_folder = VIEW_FOLDER): ?string
{
    $view = $view_folder . SLASH . "$template.view";

    return is_file($view)
        ? file_get_contents($view)
        : null;
}
