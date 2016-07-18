<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Права доступа',

            'roles' => [
                'all' => 'Все Роли',
                'create' => 'Добавить Роль',
                'edit' => 'Изменить Роль',
                'management' => 'Управление Ролями',
                'main' => 'Роли',
            ],

            'users' => [
                'all' => 'Все Пользователи',
                'change-password' => 'Сменить Пароль',
                'create' => 'Новый Пользователь',
                'deactivated' => 'Неактивные Пользователи',
                'deleted' => 'Удалённые Пользователи',
                'edit' => 'Редактировать Пользователя',
                'main' => 'Пользователи',
            ],
        ],

        'log-viewer' => [
            'main' => 'Просмотр Логов',
            'dashboard' => 'Панель Управления',
            'logs' => 'Логи',
        ],

        'sidebar' => [
            'dashboard' => 'Панель Управления',
            'general' => 'Системные Настройки',
        ],
    ],

    'language-picker' => [
        'language' => 'Язык',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'da' => 'Danish',
            'de' => 'German',
            'en' => 'English',
            'es' => 'Spanish',
            'fr' => 'French',
            'it' => 'Italian',
            'pt-BR' => 'Brazilian Portuguese',
            'ru' => 'Russian',
            'sv' => 'Swedish',
        ],
    ],
];
