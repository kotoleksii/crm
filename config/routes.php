<?php

return [
    'login'                 => 'pub/user/login',
    'logout'                => 'priv/user/logout',
    'registration'          => 'pub/user/registration',
    'workers'               => 'priv/worker/index',
    'editworker/([0-9]+)'   => 'priv/worker/edit/$1',
    'deleteworker/([0-9]+)' => 'priv/worker/delete/$1',
];