<?php

function crud_create(array $user): bool
{
    $usersData = file_get_contents(DATA_LOCATION);
    $users = json_decode($usersData, true);
    $user['id'] = md5(uniqid((string) rand(), true));
    $users[] = $user;
    $usersData = json_encode($users, JSON_PRETTY_PRINT);

    return (bool) file_put_contents(DATA_LOCATION, $usersData);
}
