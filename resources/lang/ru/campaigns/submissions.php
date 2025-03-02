<?php

return [
    'actions'       => [
        'accept'    => 'Принять',
        'reject'    => 'Отклонить',
    ],
    'apply'         => [
        'apply'         => 'Отправить',
        'help'          => 'Эта кампания открыта для новых участников. Чтобы вступить в нее, заполните эту форму. Вы получите уведомление, когда админы кампании рассмотрят вашу заявку.',
        'remove_text'   => 'вашу заявку',
        'success'       => [
            'apply' => 'Ваша заявка сохранена. Вы в любой момент можете ее редактировать или удалить. Вы получите уведомление, когда админы кампании ее рассмотрят.',
            'remove'=> 'Ваша заявка удалена.',
            'update'=> 'Ваша заявка обновлена. Вы в любой момент можете ее редактировать или удалить. Вы получите уведомление, когда админы кампании ее рассмотрят.',
        ],
        'title'         => 'Вступление в :name',
    ],
    'errors'        => [
        'not_open'  => 'Эта кампания не открыта для новых участников. Если вы хотите позволить пользователям вступать в кампанию, измените ее настройки.',
    ],
    'fields'        => [
        'application'   => 'Заявка',
        'rejection'     => 'Причина отклонения',
    ],
    'helpers'       => [
        'open_and_public'   => 'Кампания принимает заявки пользователей. Чтобы это остановить, выключите опцию "Открытая" во вкладке :tab при редактировании кампании.',
    ],
    'placeholders'  => [
        'note'  => 'Напишите свою заявку, чтобы вступить в кампанию.',
    ],
    'title'         => 'Заявки кампании',
    'update'        => [
        'approve'   => 'Выберите роль, в которую будет добавлен пользователь.',
        'approved'  => 'Заявка принята.',
        'reject'    => 'Напишите пользователю пояснение причины отклонения его заявки.',
        'rejected'  => 'Заявка отклонена.',
    ],
];
