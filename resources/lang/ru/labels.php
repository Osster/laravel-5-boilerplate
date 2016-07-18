<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'Все',
        'yes' => 'Да',
        'no' => 'Нет',
        'custom' => 'Модифицированный',
        'actions' => 'Опции',
        'buttons' => [
            'save' => 'Сохранить',
            'update' => 'Обновить',
        ],
        'hide' => 'Скрыть',
        'none' => 'Пусто',
        'show' => 'Показать',
        'toggle_navigation' => 'Скрыть Навигацию',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Создать Роль',
                'edit' => 'Редактировать Роль',
                'management' => 'Управление Ролями',

                'table' => [
                    'number_of_users' => 'Количество Пользователей',
                    'permissions' => 'Права',
                    'role' => 'Роль',
                    'sort' => 'Сортировка',
                    'total' => 'роль всего|ролей всего',
                ],
            ],

            'users' => [
                'active' => 'Активные Пользователи',
                'all_permissions' => 'Все Права',
                'change_password' => 'Сменить Пароль',
                'change_password_for' => 'Сменить Пароль для :user',
                'create' => 'Создать Пользователя',
                'deactivated' => 'Неактивные Пользователи',
                'deleted' => 'Удаленные Пользователи',
                'edit' => 'Редактировать Пользователя',
                'management' => 'Управление Пользователями',
                'no_permissions' => 'Нет Прав',
                'no_roles' => 'Нет Ролей Для привязки.',
                'permissions' => 'Права',

                'table' => [
                    'confirmed' => 'Подтвержден',
                    'created' => 'Создан',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Обновлён',
                    'name' => 'Имя',
                    'no_deactivated' => 'Неактивные Пользователи Отсутствуют',
                    'no_deleted' => 'Удалённые Пользователи Отсутствуют',
                    'roles' => 'Роли',
                    'total' => 'всего пользователь|всего пользователей',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => 'Авторизация',
            'login_button' => 'Войти',
            'login_with' => 'Вход через :social_media',
            'register_box_title' => 'Регистрация',
            'register_button' => 'Зарегистрироваться',
            'remember_me' => 'Запомнить Меня',
        ],

        'passwords' => [
            'forgot_password' => 'Забыли Пароль?',
            'reset_password_box_title' => 'Сброс Пароля',
            'reset_password_button' => 'Сбросить Пароль',
            'send_password_reset_link_button' => 'Прислать ссылку для сброса пароля',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Альфа Коды Стран',
                'alpha2' => 'Альфа 2 Коды Стран',
                'alpha3' => 'Альфа 3 Коды Стран',
                'numeric' => 'Цифровые Коды Стран',
            ],

            'macro_examples' => 'Макро Примеры',

            'state' => [
                'mexico' => 'Список Штатов Мексики',
                'us' => [
                    'us' => 'Соединённые Штаты',
                    'outlying' => 'Отдалённые Территории США',
                    'armed' => 'Вооруженные Силы США',
                ],
            ],

            'territories' => [
                'canada' => 'Список Областей и Территориальных единиц Канады',
            ],

            'timezone' => 'Часовой Пояс',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Сменить Пароль',
            ],

            'profile' => [
                'avatar' => 'Аватар',
                'created_at' => 'Дата Создания',
                'edit_information' => 'Изменить Информацию',
                'email' => 'E-mail',
                'last_updated' => 'Дата Изменения',
                'name' => 'Имя',
                'update_information' => 'Изменить Информацию',
            ],
        ],

    ],
];
