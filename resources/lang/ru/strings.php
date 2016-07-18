<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => 'Вы уверены, что хотите удалить этот пользователь навсегда? Некоторые записи, которые ссылается на идентификатор этого пользователя могут, скорее всего, привести к появлению ошибок. Действуйте на свой страх и риск. Это действие не может быть отменено.',
                'if_confirmed_off' => '(Если подтверждение отключено)',
                'restore_user_confirm' => 'Восстановить аккаунт этого пользователя?',
            ],
        ],

        'dashboard' => [
            'title' => 'Панель Администратора',
            'welcome' => 'Рады вашему возвращению',
        ],

        'general' => [
            'all_rights_reserved' => 'Все Права Защищены.',
            'are_you_sure' => 'Вы Уверены?',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Продолжить',
            'member_since' => 'Участсник с',
            'minutes' => ' минут',
            'search_placeholder' => 'Поиск...',
            'timeout' => 'Был выполнен автоматический выход из соображений безопастности из-за отсутствия активности в течении ',

            'see_all' => [
                'messages' => 'Все сообщения',
                'notifications' => 'Просмотреть все',
                'tasks' => 'Все задачи',
            ],

            'status' => [
                'online' => 'В сети',
                'offline' => 'Не в сети',
            ],

            'you_have' => [
                'messages' => '{0} У вас нет новых сообщений|{1} У вас 1 новое сообщение|[2,Inf] У вас :number новых сообщений',
                'notifications' => '{0} У вас нет новых уведомлений|{1}  У вас 1 новое уведомление|[2,Inf] У вас :number новых уведомлений',
                'tasks' => '{0} У вас нет новых задач|{1} У вас 1 новая задача|[2,Inf] У вас :number новых задач',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Ваша ссылка для смены пароля',
            'reset_password' => 'Нажмите сюда чтобы сменить пароль',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Нажмите сюда чтобы подтвердить ваш аккаунт:',
        ],

        'test' => 'Тест',

        'tests' => [
            'based_on' => [
                'permission' => 'Доступ На Основании - ',
                'role' => 'Роль На Основании - ',
            ],

            'js_injected_from_controller' => 'Javascript Внедрён из Контроллера',

            'using_blade_extensions' => 'Используются Blade Расширения',

            'using_access_helper' => [
                'array_permissions' => 'Использование Помошника Доступа с Массивом Имён Доступов На входе или их Идентификаторов когда пользователь должен обладать всеми из них.',
                'array_permissions_not' => 'Использование Помошника Доступа с Массивом Имён Доступов На входе или их Идентификаторов когда пользователь не обязательно должен обладать всеми из них.',
                'array_roles' => 'Использование Помошника Доступа с Массивом Имён Ролей На входе или их Идентификаторов когда пользователь должен обладать всеми из них.',
                'array_roles_not' => 'Использование Помошника Доступа с Массивом Имён Доступов На входе или их Идентификаторов когда пользователь не обязательно должен обладать всеми из них.',
                'permission_id' => 'Использование Помошника Доступа с Идентификатором Права Доступа',
                'permission_name' => 'Использование Помошника Доступа с Названием Права Доступа',
                'role_id' => 'Использование Помошника Доступа с Идентификатором Роли',
                'role_name' => 'Использование Помошника Доступа с Названием Роли',
            ],

            'view_console_it_works' => 'Загляните в консоль, вы должны увидеть сообщение \'it works!\' созданное в FrontendController@index',
            'you_can_see_because' => 'Вы можете видеть это сообщение потому что вам присвоена роль \':role\'!',
            'you_can_see_because_permission' => 'Вы можете видеть это сообщение потому что вам дано право доступа \':permission\'!',
        ],

        'user' => [
            'profile_updated' => 'Профиль успешно изменён.',
            'password_updated' => 'Пароль успешно изменён.',
        ],

        'welcome_to' => 'Добро пожаловать в :place',
    ],
];