<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Значение :attribute должно быть принято.',
    'active_url'           => 'Значение :attribute имеет не корректный URL адрес.',
    'after'                => 'Значение :attribute должно быть датой позднее :date.',
    'alpha'                => 'Значение :attribute может содержать только буквы.',
    'alpha_dash'           => 'Значение :attribute может содержать только буквы, числа и знак дефиса.',
    'alpha_num'            => 'Значение :attribute может содержать только буквы и числа.',
    'array'                => 'Значение :attribute должно быть массивом.',
    'before'               => 'Значение :attribute должно быть датой ранее :date.',
    'between'              => [
        'numeric' => 'Значение :attribute должно быть между :min и :max.',
        'file'    => 'Размер :attribute должен быть между :min и :max килобайт.',
        'string'  => 'Значение :attribute должно быть между :min и :max символов.',
        'array'   => 'Массив :attribute должен содержать между :min и :max элементов.',
    ],
    'boolean'              => 'Значение :attribute поля должно быть true или false.',
    'confirmed'            => 'Значение :attribute поля не совпадает с заданным выше.',
    'date'                 => 'Значение :attribute не корректная дата.',
    'date_format'          => 'Значение :attribute не соответствует формату :format.',
    'different'            => 'Значение :attribute и :other не должны совпадать.',
    'digits'               => 'Значение :attribute должно быть :digits чисел.',
    'digits_between'       => 'Значение :attribute должно быть между :min и :max числами.',
    'dimensions'           => 'Значение :attribute содержит изображение не корректное по ширине и высоте.',
    'distinct'             => 'Значение :attribute содержит повторяющееся значение.',
    'email'                => 'Значение :attribute должно содержать корректный email адрес.',
    'exists'               => 'Значение выбранного :attribute не корректно.',
    'file'                 => 'Значение :attribute должно быть файлом.',
    'filled'               => 'Значение :attribute должно быть заполнено.',
    'image'                => 'Значение :attribute должно быть изображением.',
    'in'                   => 'Значение выбранного :attribute не корректно.',
    'in_array'             => 'Значение :attribute не найдено в :other.',
    'integer'              => 'Значение :attribute должно быть числом.',
    'ip'                   => 'Значение :attribute должно быть корректным IP адресом.',
    'json'                 => 'Значение :attribute должно быть корректной JSON строкой.',
    'max'                  => [
        'numeric' => 'Значение :attribute не может превышать значения :max.',
        'file'    => 'Размер файла :attribute не может превышать значения :max килобайт.',
        'string'  => 'Значение :attribute не может превышать значения :max символов.',
        'array'   => 'Массив :attribute не может содержать более :max элементов.',
    ],
    'mimes'                => 'Значение :attribute должно быть файлом типа type: :values.',
    'min'                  => [
        'numeric' => 'Значение :attribute должно быть как минимум :min.',
        'file'    => 'Размер файла :attribute должен быть как минимум :min килобайт.',
        'string'  => 'Значение :attribute должно быть как минимум :min символов.',
        'array'   => 'Массив :attribute должен содержать как минимум :min элементов.',
    ],
    'not_in'               => 'Значение выбранного :attribute не корректно.',
    'numeric'              => 'Значение :attribute должно быть числом.',
    'present'              => 'Значение :attribute должно присутствовать в форме.',
    'regex'                => 'Значение :attribute не корректный формат.',
    'required'             => 'Значение :attribute является обязательным.',
    'required_if'          => 'Значение :attribute является обязательным когда :other равно :value.',
    'required_unless'      => 'Значение :attribute является обязательным если :other не среди :values.',
    'required_with'        => 'Значение :attribute является обязательным когда :values заполнены.',
    'required_with_all'    => 'Значение :attribute является обязательным когда все :values заполнены.',
    'required_without'     => 'Значение :attribute является обязательным когда :values пусты.',
    'required_without_all' => 'Значение :attribute является обязательным когда ниодно из :values не заполнено.',
    'same'                 => 'Значение :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Значение :attribute должно соответствовать размеру :size.',
        'file'    => 'Размер файла :attribute должен соответствовать размеру :size килобайт.',
        'string'  => 'Значение :attribute должно соответствовать размеру :size символов.',
        'array'   => 'Массив :attribute должен содержать :size элементов.',
    ],
    'string'               => 'Значение :attribute должно быть строкой.',
    'timezone'             => 'Значение :attribute должно быть корректным часовым поясом.',
    'unique'               => 'Значение :attribute уже используется.',
    'url'                  => 'Значение ГКД :attribute имеет не корректный формат.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Привязанные Роли',
                    'dependencies' => 'Зависимости',
                    'display_name' => 'Отображаемое Название',
                    'group' => 'Группа',
                    'group_sort' => 'Сортировка по Группе',

                    'groups' => [
                        'name' => 'Название Группы',
                    ],

                    'name' => 'Название',
                    'system' => 'Система?',
                ],

                'roles' => [
                    'associated_permissions' => 'Привязанные Права Доступа',
                    'name' => 'Название',
                    'sort' => 'Сортировка',
                ],

                'users' => [
                    'active' => 'Активный',
                    'associated_roles' => 'Привязанные Роли',
                    'confirmed' => 'Подтверждён',
                    'email' => 'E-mail Адрес',
                    'name' => 'Имя',
                    'other_permissions' => 'Другие Права Доступа',
                    'password' => 'Пароль',
                    'password_confirmation' => 'Подтвердить Пароль',
                    'send_confirmation_email' => 'Отправить E-mail с Кодом Подтверждения',
                ],
            ],
        ],

        'frontend' => [
            'email' => 'E-mail Адрес',
            'name' => 'Имя',
            'password' => 'Пароль',
            'password_confirmation' => 'Подтвердить Пароль',
            'old_password' => 'Старый Пароль',
            'new_password' => 'Новый Пароль',
            'new_password_confirmation' => 'Подтвердить Новый Пароль',
        ],
    ],

];
