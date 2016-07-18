<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => 'Такая роль уже существует. Пожалуйста укажите другое название.',
                'cant_delete_admin' => 'Вы не можете удалить роль администратора.',
                'create_error' => 'Произошла ошибка при создании роли. Пожалуйста попробуйте ещё раз.',
                'delete_error' => 'Произошла ошибка при удалении роли. Пожалуйста попробуйте ещё раз.',
                'has_users' => 'Вы не можете удалить роль с привязанными к ней пользователями.',
                'needs_permission' => 'Вы должны присвоить как минимум одно разрешение для этой роли.',
                'not_found' => 'Такой роли не существует.',
                'update_error' => 'Произошла ошибка при обновлении роли. Пожалуйста попробуйте ещё раз.',
            ],

            'users' => [
                'cant_deactivate_self' => 'Вы не можете произвести эту операцию сам для себя.',
                'cant_delete_self' => 'Вы не можете удалить собственный аккаунт.',
                'create_error' => 'Произошла ошибка при создании нового пользователя. Пожалуйста попробуйте ещё раз.',
                'delete_error' => 'Произошла ошибка при удалении пользователя. Пожалуйста попробуйте ещё раз.',
                'email_error' => 'Этот email адрес принадлежит другому пользователю.',
                'mark_error' => 'Произошла ошибка при обновлении данных пользователя. Пожалуйста попробуйте ещё раз.',
                'not_found' => 'Такого пользователя не существует.',
                'restore_error' => 'Произошла ошибка при восстановлении учетной записи пользователя. Пожалуйста попробуйте ещё раз.',
                'role_needed_create' => 'Вы должны выбрать как минимум одну роль. Пользователь будет создан но при этом будет деактивирован.',
                'role_needed' => 'Вы должны выбрать как минимум одну роль',
                'update_error' => 'Произошла ошибка при обновлении данных пользователя. Пожалуйста попробуйте ещё раз.',
                'update_password_error' => 'Произошла ошибка при обновлении пароля пользователя. Пожалуйста попробуйте ещё раз.',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Ваш аккаунт уже подтверждён.',
                'confirm' => 'Подтвердите ваш аккаунт!',
                'created_confirm' => 'Ваш аккаунт был успешно создан. Мы выслали вам e-mail для подтверждения аккаунта.',
                'mismatch' => 'Ваш код подтверждения не соответствует высланному по почте.',
                'not_found' => 'Такого кода подтверждения не существует.',
                'resend' => 'Ваш аккаунт пока не подтверждён. Пожалуйста перейдите по ссвлке из высланного вам e-mail, или <a href="' . route('account.confirm.resend', ':user_id') . '">нажмите сюда</a> для повторной отправки письма с кодом подтверждения на e-mail.',
                'success' => 'Ваш аккаунт был успешно подтверждён!',
                'resent' => 'Новое письмо с кодом подтверждения было выслано по указанному e-mail адресу.',
            ],

            'deactivated' => 'Ваш аккаунт был деактивирован.',
            'email_taken' => 'Данный e-mail адрес уже используется.',

            'password' => [
                'change_mismatch' => 'Данный пароль не соответствует указанному ранее.',
            ],
        ],
    ],
];
