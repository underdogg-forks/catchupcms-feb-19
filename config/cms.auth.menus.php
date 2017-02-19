<?php

return [

    'backend_sidebar' => [
        'User Management' => [
            'children' => [
                [
                    'route' => 'admin.user.manager',
                    'text' => 'Users',
                    'icon' => 'fa-user',
                    'order' => 1,
                    'permission' => 'manage@auth_user',
                    'activePattern' => '\/{backend}\/users\/*',
                    'label' => 'Modules\Auth\Composers\BackendSidebar@userCount',
                ],
                [
                    'route' => 'admin.role.manager',
                    'text' => 'Roles',
                    'icon' => 'fa-users',
                    'order' => 2,
                    'permission' => 'manage@auth_role',
                    'activePattern' => '\/{backend}\/roles\/*',
                    'label' => 'Modules\Auth\Composers\BackendSidebar@roleCount',
                ],
                [
                    'route' => 'admin.apikey.manager',
                    'text' => 'Api Keys',
                    'icon' => 'fa-key',
                    'order' => 4,
                    'permission' => 'api@auth_config',
                    'activePattern' => '\/{backend}\/apikey\/*',
                    'label' => 'Modules\Auth\Composers\BackendSidebar@apikeyCount',
                ],
            ],
        ],
    ],

    'backend_config_menu' => [
        [
            'route' => 'admin.config.users',
            'text' => 'User Settings',
            'icon' => 'fa-users',
            'order' => 6,
            'permission' => 'api@auth_config',
        ],
        [
            'route' => 'admin.config.authentication',
            'text' => 'Authentication Settings',
            'icon' => 'fa-lock',
            'order' => 7,
            'permission' => 'authentication@auth_config',
        ],
        [
            'route' => 'admin.config.api',
            'text' => 'Api Settings',
            'icon' => 'fa-key',
            'order' => 8,
            'permission' => 'users@auth_config',
        ],
    ],

    'backend_user_menu' => [
        [
            'route' => ['admin.user.edit', ['auth_user_id' => 'segment:3']],
            'text' => 'Basic Info',
            'icon' => 'fa-file-text-o',
            'order' => 1,
            'permission' => 'manage.update@auth_user',
        ],
        [
            'route' => ['admin.user.security', ['auth_user_id' => 'segment:3']],
            'text' => 'Security',
            'icon' => 'fa-lock',
            'order' => 2,
            'permission' => 'manage.update@auth_user',
        ],
        [
            'route' => ['admin.user.avatar', ['auth_user_id' => 'segment:3']],
            'text' => 'Avatars',
            'icon' => 'fa-picture-o',
            'order' => 3,
            'permission' => 'manage.update@auth_user',
        ],
        [
            'route' => ['admin.user.role', ['auth_user_id' => 'segment:3']],
            'text' => 'Roles',
            'icon' => 'fa-users',
            'order' => 4,
            'permission' => 'roles@auth_user',
        ],
        [
            'route' => ['admin.user.permissions', ['auth_user_id' => 'segment:3']],
            'text' => 'Permissions',
            'icon' => 'fa-check-square-o',
            'order' => 5,
            'permission' => 'permissions@auth_user',
        ],
        [
            'route' => ['admin.user.apikey', ['auth_user_id' => 'segment:3']],
            'text' => 'API Keys',
            'icon' => 'fa-key',
            'order' => 6,
            'permission' => 'apikey@auth_user',
        ],
    ],

    'backend_role_menu' => [
        [
            'route' => ['admin.role.edit', ['auth_role_id' => 'segment:3']],
            'text' => 'Basic Info',
            'icon' => 'fa-file-text-o',
            'order' => 1,
            'permission' => 'manage.update@auth_role',
        ],
        [
            'route' => ['admin.role.permissions', ['auth_role_id' => 'segment:3']],
            'text' => 'Permissions',
            'icon' => 'fa-check-square-o',
            'order' => 2,
            'permission' => 'manage.update@auth_role',
        ],
        [
            'route' => ['admin.role.users', ['auth_role_id' => 'segment:3']],
            'text' => 'Manage Users on this Role',
            'icon' => 'fa-users',
            'order' => 3,
            'permission' => 'manage.update@auth_role',
        ],
    ],

    'frontend_user_controlpanel' => [
        [
            'route' => 'pxcms.user.dashboard',
            'text' => 'Dashboard',
            'icon' => 'fa-file-text-o',
            'order' => 1,
            'permission' => null,
        ],
        [
            'route' => 'pxcms.user.settings',
            'text' => 'Account',
            'icon' => 'fa-user',
            'order' => 2,
            'permission' => null,
        ],
        [
            'route' => 'pxcms.user.security',
            'text' => 'Security',
            'icon' => 'fa-lock',
            'order' => 3,
            'permission' => null,
        ],
        [
            'route' => 'pxcms.user.avatar',
            'text' => 'Avatars',
            'icon' => 'fa-picture-o',
            'order' => 4,
            'permission' => null,
        ],
        // [
        //     'route' => 'pxcms.user.notification',
        //     'text' => 'Notifications',
        //     'icon' => 'fa-envelope-o',
        //     'order' => 5,
        //     'permission' => null,
        // ],
    ],
];
