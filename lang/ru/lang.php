<?php

return [
    'plugin' => [
        'name' => 'Портфолио',
        'description' => 'Плагин для создания портфолио для сайта от студии Za-Web'
    ],

    'navigation' => [
        'main' => 'Портфолио',
        'side' => [
            'jobs' => 'Работы',
            'categories' => 'Категории'
        ]
    ],
    'components' => [
        'jobs' => [
            'name' => 'Список работ',
            'description' => 'Позволяет выводить список работ из портфолио'
        ],
        'job' => [
            'name' => 'Одиночная работа',
            'description' => 'Позволяет выводить одну работу выбранную по id',
            'jobId' => 'ID для вывода'
        ],
        'categories' => [
            'name' => 'Список категорий',
            'description' => 'Позволяет выводить список категорий'
        ]
    ],
    'forms' => [
        'create' => 'Создать',
        'cancel' => 'Закрыть',
        'create_and_cancel' => 'Создать и закрыть',
        'save' => 'Сохранить',
        'save_and_cancel' => 'Сохранить и выйти'
    ],
    'jobs' => [
        'new' => 'Добавить работу',
        'tabs' => [
            'main' => [
                'title' => 'Основное',
            ],
            'attachments' => [
                'title' => 'Картинки'
            ],
            'categories' => [
                'title' => 'Категории'
            ]
        ],
        'fields' => [
            'title' => 'Заголовок',
            'description' => 'Описание',
            'created_at' => 'Создан'
        ],


    ],

    'categories' => [
        'new' => 'Добавить категорию',
        'select_category' => 'Выберете категории',

        'fields' => [
            'title' => 'Название',
            'description' => 'Описание',
            'alias' => 'Псевдоним',
        ]
    ]
];