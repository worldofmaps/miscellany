<?php

return [
    'actions'       => [
        'add'       => 'New Post',
        'add_role'  => 'Add role',
        'add_user'  => 'Add user',
    ],
    'create'        => [
        'description'   => 'Create a new post',
        'success'       => 'Post \':name\' added to :entity.',
        'title'         => 'New post for :name',
    ],
    'destroy'       => [
        'success'   => 'Post \':name\' for :entity removed.',
    ],
    'edit'          => [
        'description'   => 'Update an existing post',
        'success'       => 'Post \':name\' for :entity updated.',
        'title'         => 'Update post for :name',
    ],
    'fields'        => [
        'collapsed' => 'Collapse post by default',
        'creator'   => 'Creator',
        'entry'     => 'Entry',
        'name'      => 'Name',
    ],
    'footer'        => [
        'created'   => 'Created by :user on :date',
        'updated'   => 'Updated by :user on :date',
    ],
    'hint'          => 'Information that doesn\'t quite fit in the standard fields of an entity or that should be kept private can be added as posts.',
    'hints'         => [
        'reorder'   => 'You can reorder posts of an entity by clicking on the :icon icon in entity\'s header.',
    ],
    'index'         => [
        'title' => 'Posts for :name',
    ],
    'placeholders'  => [
        'name'  => 'Name of the post, observation or remark',
    ],
    'show'          => [
        'advanced'  => 'Advanced Permissions',
        'title'     => 'Post :name for :entity',
    ],
];
